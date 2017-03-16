<?php

class SJB_Admin_GuestAlerts_Export extends SJB_Function
{
    public function isAccessible()
    {
        $this->setPermissionLabel(SJB_Acl::ADMIN_JOB_BOARD);
        return parent::isAccessible();
    }

	public function execute()
	{
		$guestAlert = new SJB_GuestAlert(array());
		$guestAlert->addSubscriptionDateProperty();
		$guestAlert->addStatusProperty();

		$search_form_builder = new SJB_SearchFormBuilder($guestAlert);

		$criteria_saver = new SJB_GuestAlertCriteriaSaver();
		$criteria = $search_form_builder->extractCriteriaFromRequestData($criteria_saver->getCriteria(), $guestAlert);
		$sortingField = SJB_Request::getVar('sorting_field', 'subscription_date');
		$sortingOrder = SJB_Request::getVar('sorting_order', 'DESC');
		$searcher = new SJB_GuestAlertSearcher(false, $sortingField, $sortingOrder);
		$foundGuestAlerts = $searcher->getObjectsSIDsByCriteria($criteria);
		foreach ($foundGuestAlerts as $id => $guestAlertSID) {
			$foundGuestAlerts[$id] = SJB_GuestAlertManager::getGuestAlertInfoBySID($guestAlertSID);
			$foundGuestAlerts[$id] = array('email' => $foundGuestAlerts[$id]['email']);
		}

		$type = SJB_Request::getVar('type', 'csv');
		$fileName = 'guest_alerts_' . date('Y-m-d');

		SJB_StatisticsExportController::createExportDirectory();

		switch ($type) {
			case 'csv':
				$ext = 'csv';
				SJB_HelperFunctions::makeCSVExportFile($foundGuestAlerts, $fileName . '.' . $ext);
				break;

			default:
			case 'xls':
				$ext = 'xls';
				SJB_HelperFunctions::makeXLSExportFile($foundGuestAlerts, $fileName . '.' . $ext, 'Guest Alerts');
				break;
		}
		SJB_ExportController::sendExportFile($fileName . '.' . $ext);
	}
}
