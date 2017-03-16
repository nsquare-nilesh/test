<?php

class SJB_Miscellaneous_TaskScheduler extends SJB_Function
{
    /** @var SJB_TemplateProcessor */
    public $tp;

    private $lang;
    private $currentDate;
    private $notifiedJobAlerts = [];

    public function execute()
    {
        set_time_limit(0);
        $i18n = SJB_I18N::getInstance();
        $this->lang = $i18n->getLanguageData($i18n->getCurrentLanguage());
        $this->currentDate = strftime($this->lang['date_format'], time());

        $this->tp = SJB_System::getTemplateProcessor();

        if ((time() - SJB_Settings::getSettingByName('task_scheduler_last_executed_time_hourly')) > 3600) {
            $this->runHourlyTaskScheduler();
            SJB_Settings::updateSetting('task_scheduler_last_executed_time_hourly', time());
        }
        if ((time() - SJB_Settings::getSettingByName('task_scheduler_last_executed_time_daily')) > 86400) {
            $this->runDailyTaskScheduler();
            SJB_Settings::updateSetting('task_scheduler_last_executed_time_daily', time());
        }
        $this->runTaskScheduler();
    }

    private function runDailyTaskScheduler()
    {
        $guestsNotifiedEmails = $this->sendGuestsAlerts();
        $this->tp->assign('notified_guests_emails', $guestsNotifiedEmails);
    }

    private function runHourlyTaskScheduler()
    {
    }

    private function runTaskScheduler()
    {
        // Deactivate Expired Listings & Send Notifications
        $listingsExpiredID = SJB_ListingManager::getExpiredListingsSID();
        foreach ($listingsExpiredID as $listingExpiredID) {
            SJB_ListingManager::deactivateListingBySID($listingExpiredID, true);
            $listing = SJB_ListingManager::getObjectBySID($listingExpiredID);
            $listingInfo = SJB_ListingManager::createTemplateStructureForListing($listing);
            SJB_Notifications::sendUserListingExpiredLetter($listingInfo);
        }
        $listingsDeactivatedID = [];
        if (SJB_Settings::getSettingByName('automatically_delete_expired_listings')) {
            $listingsDeactivatedID = SJB_ListingManager::getDeactivatedListingsSID();
            foreach ($listingsDeactivatedID as $listingID) {
                SJB_ListingManager::deleteListingBySID($listingID);
            }
        }

        SJB_Cache::getInstance()->clean('matchingAnyTag', [SJB_Cache::TAG_LISTINGS]);

        // Send Notifications for Expired Contracts
        $expiredContracts = SJB_ContractManager::getExpiredContractsID();
        foreach ($expiredContracts as $key => $expiredContract) {
            $contract = new SJB_Contract(['contract_id' => $expiredContract]);
            if ($contract->isRecurring() && !$contract->isCanceled()) {
                $gateway = SJB_PaymentGatewayManager::getObjectByID($contract->getGatewayId());
                $invoice = SJB_InvoiceManager::getObjectBySID($contract->getInvoiceId());
                if ($gateway && $invoice && $invoice->getPropertyValue('recurring_id')) {
                    $invoice->setSID(null);
                    $invoice->setDate(null);
                    $invoice->setStatus(SJB_Invoice::INVOICE_STATUS_PENDING);

                    $items = $invoice->getPropertyValue('items');
                    $startDate = $contract->expired_date;
                    $date = new DateTime($startDate);
                    $date->modify('+1 ' . $contract->extra_info['billing_cycle']);
                    $contract->expired_date = $date->format('Y-m-d');
                    $items['names'] = [1 => $invoice->getProductNames() . sprintf(' (%s - %s)', SJB_TemplateProcessor::date($startDate), SJB_TemplateProcessor::date($contract->expired_date))];

                    $invoice->setPropertyValue('items', $items);
                    SJB_InvoiceManager::saveInvoice($invoice);
                    $invoice = SJB_InvoiceManager::getObjectBySID($invoice->getSID());
                    if ($gateway->charge($invoice)) {
                        $contract->saveInDB();
                        SJB_InvoiceManager::markPaidInvoiceBySID($invoice->getSID(), $contract);
                        unset($expiredContracts[$key]);
                        continue;
                    }
                }
                if ($invoice) {
                    SJB_Notifications::sendUserRecurringContractExpiredLetter($contract, $invoice);
                }
            } else {
                SJB_Notifications::sendUserContractExpiredLetter($contract);
            }
            SJB_ContractManager::deleteContract($expiredContract);
        }

        // LISTING XML IMPORT
        SJB_XmlImport::runImport();

        // UPDATE PAGES WITH FUNCTION EQUAL BROWSE(e.g. /browse-by-city/)
        SJB_BrowseDBManager::rebuildBrowses();

        //-------------------sitemap generator--------------------//
        SJB_System::executeFunction('miscellaneous', 'sitemap_generator');

        $now = SJB_DateType::mysqlNow();
        $this->tp->assign('expired_listings_id', $listingsExpiredID);
        $this->tp->assign('deactivated_listings_id', $listingsDeactivatedID);
        $this->tp->assign('expired_contracts_id', $expiredContracts);
        $this->tp->assign('notifiedJobAlerts', $this->notifiedJobAlerts);

        $schedulerLog = $this->tp->fetch('task_scheduler_log.tpl');

        SJB_DB::query('INSERT INTO `task_scheduler_log`
			(`last_executed_date`, `notifieds_sent`, `expired_listings`, `expired_contracts`, `log_text`)
			VALUES ( ?s, ?n, ?n, ?n, ?s)',
            $now, count($this->notifiedJobAlerts), count($listingsExpiredID), count($expiredContracts), $schedulerLog);

        SJB_System::getModuleManager()->executeFunction('classifieds', 'linkedin');
        SJB_System::getModuleManager()->executeFunction('classifieds', 'facebook');

        SJB_ProductsManager::cleanup();

        if (SJB_H::isSaas()) {
            SJB_Settings::updateCustomDomainRedirect();

            file_put_contents(SJB_BASE_DIR . 'robots.txt', join("\n", [
                'User-agent: *',
                'Disallow: /files/files/',
                'Sitemap: ' . SJB_H::getCustomDomainUrl() . '/sitemap.xml',
                '',
                'User-agent: YandexBot',
                'Disallow: /files/files/',
                'Crawl-delay: 5',
            ]));
        }

        SJB_Event::dispatch('task_scheduler_run');
    }

    public function sendGuestsAlerts()
    {
        $guestEmailsNotified = [];
        $notificationsLimit = (int)SJB_Settings::getSettingByName('num_of_listings_sent_in_email_alerts');

        $listing = new SJB_Listing();
        $listing->addActivationDateProperty();
        $aliasInfoID = $listing->addIDProperty();
        $userNameAliasInfo = $listing->addUsernameProperty();
        $listingTypeIDInfo = $listing->addListingTypeIDProperty();
        $aliases = new SJB_PropertyAliases();
        $aliases->addAlias($aliasInfoID);
        $aliases->addAlias($userNameAliasInfo);
        $aliases->addAlias($listingTypeIDInfo);

        $guestAlertsToNotify = SJB_GuestAlertManager::getGuestAlertsToNotify();

        foreach ($guestAlertsToNotify as $guestAlertInfo) {
            $dataSearch = @unserialize($guestAlertInfo['data']);
            if (!$dataSearch) {
                SJB_Error::getInstance()->addWarning('Failed to unserialize guest alert', [
                    'alert_info' => $guestAlertInfo
                ]);
                continue;
            }
            $dataSearch['active']['equal'] = 1;
            if (!empty($guestAlertInfo['last_send'])) {
                $dateArr = explode(' ', $guestAlertInfo['last_send']);
                $dateArr = explode('-', $dateArr[0]);
                $guestAlertInfo['last_send'] = strftime($this->lang['date_format'], mktime(0, 0, 0, $dateArr[1], $dateArr[2], $dateArr[0]));
                $dataSearch['activation_date']['not_less'] = $guestAlertInfo['last_send'];
            }
            $dataSearch['activation_date']['not_more'] = $this->currentDate;
            $listingTypeSID = 0;
            if ($dataSearch['listing_type']['equal']) {
                $listingTypeID = $dataSearch['listing_type']['equal'];
                $listingTypeSID = SJB_ListingTypeManager::getListingTypeSIDByID($listingTypeID);
        }

            $criteria = SJB_SearchFormBuilder::extractCriteriaFromRequestData($dataSearch, $listing);
            $searcher = new SJB_ListingSearcher();
            $searcher->found_object_sids = [];
            $searcher->setLimit($notificationsLimit);
            $listingsIDsFound = $searcher->getObjectsSIDsByCriteria($criteria, $aliases);

            if (count($listingsIDsFound)) {
                $sentGuestAlertNewListingsFoundLetter = SJB_Notifications::sendGuestAlertNewListingsFoundLetter($listingsIDsFound, $guestAlertInfo, $listingTypeSID);
                if ($sentGuestAlertNewListingsFoundLetter) {
                    SJB_GuestAlertManager::markGuestAlertAsSentBySID($guestAlertInfo['sid']);
                    array_push($guestEmailsNotified, $guestAlertInfo['email']);
                    $this->notifiedJobAlerts[] = $guestAlertInfo['sid'];
                }
            }
        }
        return $guestEmailsNotified;
    }
}
