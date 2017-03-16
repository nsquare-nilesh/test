<?php

class SJB_Admin_Classifieds_ManageListings extends SJB_Function
{
    public function isAccessible()
    {
        $this->setPermissionLabel(SJB_Acl::ADMIN_JOB_BOARD);
        return parent::isAccessible();
    }

    public function execute()
    {
        $listingTypeSid = SJB_Request::getVar('listing_type_sid', false);
        $template_processor = SJB_System::getTemplateProcessor();

        if (isset($_REQUEST['restore']) && isset($listingSearcher['criteria_values']['listing_type_sid'])) {
            $listingSearcher = SJB_Session::getValue('ListingSearcher');
            $listingTypeSid = $listingSearcher['criteria_values']['listing_type_sid']['equal'];
        }
        $listingTypeInfo = SJB_ListingTypeManager::getListingTypeInfoBySID($listingTypeSid);
        $template_processor->assign('listingsType', SJB_ListingTypeManager::createTemplateStructure($listingTypeInfo));

        $show_search_form = true;
        if (empty($_REQUEST['action']) && empty($_REQUEST['restore']))
            $show_search_form = false;

        $template_processor->assign('show_search_form', $show_search_form);

        /**************** S E A R C H   F O R M ****************/
        $listing = SJB_ObjectMother::createListing([], $listingTypeSid);
        $id_alias_info = $listing->addIDProperty();
        $username_alias_info = $listing->addUsernameProperty();
        $productAliasInfo = $listing->addProductProperty($listingTypeSid);
        $listing->addCompanyNameProperty();
        $listing->addActivationDateProperty();
        if ($listingTypeSid == SJB_ListingTypeManager::JOB) {
            $listing->addProperty([
                'caption' => 'Status',
                'id' => 'active',
                'type' => 'list',
                'value' => SJB_Request::getVar('status'),
                'is_system' => true,
                'list_values' => [
                    [
                        'id' => '1',
                        'caption' => 'Active',
                    ],
                    [
                        'id' => '2',
                        'caption' => 'Pending Approval',
                    ],
                    [
                        'id' => '0',
                        'caption' => 'Not active',
                    ],
                ],
            ]);
        } else {
            $listing->addActiveProperty();
        }

        $listing->addKeywordsProperty();
        $listing->addDataSourceProperty();
        $listing->addProperty(
            [
                'id' => 'PostingDate',
                'caption' => 'Posting Date',
                'type' => 'list',
                'list_values' => [
                    [
                        'id' => '0',
                        'caption' => 'Today',
                    ],
                    [
                        'id' => '7',
                        'caption' => 'Last 7 days',
                    ],
                    [
                        'id' => '14',
                        'caption' => 'Last 14 days',
                    ],
                    [
                        'id' => '30',
                        'caption' => 'Last 30 days',
                    ],
                ],
                'is_required' => false,
                'is_system' => true,
                'order' => 1000000,
            ]
        );

        $aliases = new SJB_PropertyAliases();
        $aliases->addAlias($username_alias_info);
        $aliases->addAlias($id_alias_info);
        $aliases->addAlias($productAliasInfo);

        $search_form_builder = new SJB_SearchFormBuilder($listing);
        $criteria_saver = new SJB_ListingCriteriaSaver();

        $keywords = NULL;
        if (isset($_REQUEST['restore'])) {
            $_REQUEST = array_merge($_REQUEST, $criteria_saver->getCriteria());
            $criteria = $criteria_saver->getCriteria();
            $listingSid = SJB_Array::getPath($criteria, 'sid') ? $criteria['sid']['equal'] : '';
            $keywords = SJB_Array::getPath($criteria, 'keywords') ? $criteria['keywords']['like'] : $listingSid;
        }

        if ($listingTypeSid) {
            $_REQUEST['listing_type_sid'] = ['equal' => $listingTypeSid];
            $_REQUEST['preview'] = ['equal' => 0]; // do not show preview listings
        }

        $template_processor->assign('companyName', isset($_REQUEST['company_name']['like']) ? $_REQUEST['company_name']['like'] : '');
        $template_processor->assign('idKeyword', isset($_REQUEST['idKeyword']) ? $_REQUEST['idKeyword'] : $keywords);
        $request = $this->prepareRequestedCriteria();
        $criteria = SJB_SearchFormBuilder::extractCriteriaFromRequestData($_REQUEST, $listing);
        $search_form_builder->setCriteria($criteria);

        // criteria for search and for the form are different. see PostingDate
        $criteria = SJB_SearchFormBuilder::extractCriteriaFromRequestData($request, $listing);
        $search_form_builder->registerTags($template_processor);
        $template = 'manage_listings.tpl';
        if ($listingTypeInfo['id'] == 'Job') {
            $template = 'manage_jobs.tpl';
        }
        $template_processor->display($template);

        /************* S E A R C H   F O R M   R E S U L T S *************/

        $paginator = new SJB_ListingPagination($listingTypeInfo);
        $searcher = SJB_ObjectMother::createListingSearcher();
        $foundListingsSIDs = [];
        if (SJB_Request::getVar('action', 'search') == 'search' || isset($_REQUEST['restore'])) {
            if (!isset($_REQUEST['restore'])) {
                $criteria_saver->resetSearchResultsDisplay();
            }
            $innerJoin = '';
            if ($paginator->sortingField == 'username') {
                $innerJoin = ['users' => ['join_field' => 'sid', 'join_field2' => 'user_sid', 'main_table' => 'listings', 'join' => 'INNER JOIN']];
            }
            $sorting = [];
            if ($paginator->sortingField == 'id') {
                $sorting = ['sid' => $paginator->sortingOrder];
            } else {
                $sorting = [$paginator->sortingField => $paginator->sortingOrder];
            }
            $searcher->setLimit((($paginator->currentPage - 1) * $paginator->itemsPerPage) . ', ' . $paginator->itemsPerPage);
            $foundListingsSIDs = $searcher->getObjectsSIDsByCriteria($criteria, $aliases, $sorting, $innerJoin); //get found listing sids per page
            $paginator->setItemsCount($searcher->getAffectedRows());
            if (empty($foundListingsSIDs) && $paginator->currentPage != 1) {
                if ($listingTypeInfo['id'] == 'Job' || $listingTypeInfo['id'] == 'Resume') {
                    SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . '/manage-' . strtolower($listingTypeInfo['id']) . 's/?page=1&restore=1');
                } else {
                    SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . '/manage-' . strtolower($listingTypeInfo['id']) . '-listings/?page=1&restore=1');
                }
            }

            $criteria_saver->setSessionForListingsPerPage($paginator->itemsPerPage);
            $criteria_saver->setSessionForCurrentPage($paginator->currentPage);
            $criteria_saver->setSessionForCriteria($_REQUEST);

            $orderInfo = [
                'sorting_field' => $paginator->sortingField,
                'sorting_order' => $paginator->sortingOrder
            ];

            $criteria_saver->setSessionForOrderInfo($orderInfo);
        } else {
            $criteria_saver->resetSearchResultsDisplay();
            return;
        }

        /**************** S O R T I N G *****************/
        $empty_listing = SJB_ObjectMother::createListing([], $listingTypeSid);
        $empty_listing->addIDProperty();
        $empty_listing->addListingTypeIDProperty();
        $empty_listing->addActivationDateProperty();
        $empty_listing->addUsernameProperty();
        $empty_listing->addNumberOfViewsProperty();
        $empty_listing->addActiveProperty();
        $empty_listing->addKeywordsProperty();
        $empty_listing->addDataSourceProperty();


        /************* S T R U C T U R E **************/
        $listings_structure = [];
        if ($foundListingsSIDs) {
            foreach ($foundListingsSIDs as $sid) {
                $listing = SJB_ListingManager::getObjectBySID($sid);
                $listings_structure[$listing->getID()] = SJB_ListingManager::createTemplateStructureForListing($listing);
                // fixme: for jobs only
                $listings_structure[$listing->getID()]['applications'] = SJB_Applications::getCountAppsByJob($listing->getID());
            }
        }

        /*************** D I S P L A Y ****************/
        $template_processor->assign('paginationInfo', $paginator->getPaginationInfo());
        $template_processor->assign('listings', $listings_structure);
        $template_processor->display('display_results.tpl');
    }

    private function prepareRequestedCriteria()
    {
        if ($idKeyword = SJB_Request::getVar('idKeyword', false)) {
            if (strpos($idKeyword, ',') !== false) {
                $idKeywordTrimmed = [];
                foreach (explode(',', $idKeyword) as $idK) {
                    $idKeywordTrimmed[] = trim($idK);
                }
                foreach ($idKeywordTrimmed as $val) {
                    if (intval($val)) {
                        $_REQUEST['sid']['in'][] = (int)$val;
                    } else {
                        unset($_REQUEST['sid']['in']);
                        $_REQUEST['keywords']['like'][] = $val;
                    }
                }
            } else {
                if (intval($idKeyword)) {
                    $_REQUEST['sid']['equal'] = (int)$idKeyword;
                } else {
                    $_REQUEST['keywords']['like'] = trim($idKeyword);
                }
            }
        }
        if ($companyUserName = SJB_Request::getVar('company_name', false)) {
            if (!empty($companyUserName['like'])) {
                $userSIDs = SJB_UserManager::getUserSIDsLikeCompanyName($companyUserName['like']);
                if (empty($userSIDs)) {
                    unset($_REQUEST['company_name']);
                }
                $usernameLikeSids = SJB_UserManager::getUserSIDsLikeUsername(SJB_DB::quote($companyUserName['like']));

                $_REQUEST['user_sid']['in'] = array_merge(
                    !empty($userSIDs) ? $userSIDs : [''],
                    !empty($usernameLikeSids) ? $usernameLikeSids : ['']
                );
            }
        }

        $request = unserialize(serialize($_REQUEST));

        if (!empty($request['PostingDate'])) {
            $period = $request['PostingDate']['multi_like'][0];
            $i18n = SJB_I18N::getInstance();
            $request['activation_date']['not_less'] = $i18n->getDate(date('Y-m-d', strtotime("- {$period} days")));
            unset ($request['PostingDate']);
        }
        return $request;
    }
}
