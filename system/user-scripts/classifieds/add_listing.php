<?php

class SJB_Classifieds_AddListing extends SJB_Function
{
    protected $listingTypeID;

    protected $formSubmittedFromPreview;

    /**
     * @var SJB_TemplateProcessor
     */
    protected $tp;

    protected $buttonPressedPostToProceed;

    public function execute()
    {
        $this->tp = SJB_System::getTemplateProcessor();
        $error = null;
        $current_user = SJB_UserManager::getCurrentUser();

        $server_content_length = isset($_SERVER['CONTENT_LENGTH']) ? $_SERVER['CONTENT_LENGTH'] : null;
        $this->listingTypeID = SJB_Request::getVar('listing_type_id', false);

        // listing preview @author still
        $this->formSubmittedFromPreview = SJB_Request::getVar('action_add', false, 'POST') && SJB_Request::getVar('from-preview', false, 'POST');
        $editTempListing = SJB_Request::getVar('edit_temp_listing', false, 'POST');

        if ($this->formSubmittedFromPreview || $editTempListing) {
            $listingSID = SJB_Session::getValue('preview_listing_sid_for_add');
            $listingInfo = SJB_ListingManager::getListingInfoBySID($listingSID);

            if (empty($this->listingTypeID) && !empty($listingInfo)) {
                // if on preview page "POST" button was pressed

                if ($this->formSubmittedFromPreview) {
                    $listing = new SJB_Listing($listingInfo, $listingInfo['listing_type_sid']);
                    $properties = $listing->getProperties();
                    foreach ($properties as $fieldID => $property) {
                        switch ($property->getType()) {
                            case 'date':
                                if (!empty($listingInfo[$fieldID])) {
                                    $listingInfo[$fieldID] = SJB_I18N::getInstance()->getDate($listingInfo[$fieldID]);
                                }
                                break;
                            case 'complex':
                                $complex = $property->type->complex;
                                $complexProperties = $complex->getProperties();
                                foreach ($complexProperties as $complexfieldID => $complexProperty) {
                                    if ($complexProperty->getType() == 'date') {
                                        $values = $complexProperty->getValue();
                                        foreach ($values as $index => $value) {
                                            if (!empty($listingInfo[$fieldID][$complexfieldID][$index])) {
                                                $listingInfo[$fieldID][$complexfieldID][$index] = SJB_I18N::getInstance()->getDate($listingInfo[$fieldID][$complexfieldID][$index]);
                                            }
                                        }
                                    }
                                }
                                break;
                        }
                    }
                }
                if ($editTempListing || $this->formSubmittedFromPreview) {

                    $this->listingTypeID = SJB_ListingTypeManager::getListingTypeIDBySID($listingInfo['listing_type_sid']);
                    // check wether user is owner of the temp listing
                    if ($listingInfo['user_sid'] != $current_user->getID()) {
                        $error['NOT_OWNER_OF_LISTING'] = $listingSID;
                    }
                    // set listing info and listing type id
                    $_REQUEST = array_merge($_REQUEST, $listingInfo);
                    $_REQUEST['listing_type_id'] = $this->listingTypeID;
                }
            }
            if (empty($listingInfo)) {
                $listingSID = null;
                SJB_Session::unsetValue('preview_listing_sid_for_add');
            }
        } else {
            $listingSID = null;
            SJB_Session::unsetValue('preview_listing_sid_for_add');
        }

        // get post_max_size in bytes
        $post_max_size_orig = ini_get("post_max_size");
        $val = trim($post_max_size_orig);
        $tmp = substr($val, strlen($val) - 1);
        $tmp = strtolower($tmp);
        /*
         * if ini value is K - then multiply to 1024
         * if ini value is M - then multiply twice: in case 'm', and case 'k'
         * if ini value is G - then multiply tree times: in 'g', 'm', 'k'
         *
         * out value - in bytes!
         */
        switch ($tmp) {
            case 'g':
                $val *= 1024;
            case 'm':
                $val *= 1024;
            case 'k':
                $val *= 1024;
        }
        $post_max_size = $val;

        $filename = SJB_Request::getVar('filename', false);
        if ($filename) {
            $listing_id = SJB_Request::getVar('listing_id', '', 'default', 'int');
            SJB_UploadFileManager::openFile($filename, $listing_id);
            $errors['NO_SUCH_FILE'] = true;
        }

        if (empty($_POST) && ($server_content_length > $post_max_size)) {
            $errors['MAX_FILE_SIZE_EXCEEDED'] = 1;
            $this->tp->assign('post_max_size', $post_max_size_orig);
        }

        $tmpListingIDFromRequest = SJB_Request::getVar('listing_id', false, 'default', 'int');
        if (!empty($tmpListingIDFromRequest)) {
            $tmpListingSID = $tmpListingIDFromRequest;
        } elseif (!$tmpListingIDFromRequest) {
            $tmpListingSID = time();
        }

        $this->buttonPressedPostToProceed = SJB_Request::getVar('proceed_to_posting');
        if (SJB_UserManager::isUserLoggedIn()) {
            SJB_Session::unsetValue('proceed_to_posting');
            SJB_Session::unsetValue('productSID');
            SJB_Session::unsetValue('listing_type_id');
            if (!is_null($this->buttonPressedPostToProceed)) {
                $productSID = SJB_Request::getInt('productSID');
				
                if (in_array($productSID, $current_user->getTrialProductSIDByUserSID())) {
                    SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . "/shopping-cart/?error=trial_product");
                }
                $productInfo = SJB_ProductsManager::getProductInfoBySID($productSID);
                $userInfo = SJB_UserManager::getCurrentUserInfo();
                if ($userInfo['user_group_sid'] == $productInfo['user_group_sid']) {
                    $this->tp->assign('productSID', $productSID);
                    $this->tp->assign('proceed_to_posting', $productSID);
                    $this->tp->assign("listing_id", $tmpListingSID);
                    $this->addListing($listingSID, 0, $productSID);
                } else {
                    SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . '/products/?permission=post_' . mb_strtolower($this->listingTypeID));
                }
            } else {
                if ($productsInfo = SJB_ListingManager::canCurrentUserAddListing($this->listingTypeID)) {
                    if ($contractID = SJB_Request::getVar('contract_id', false, 'POST')) {
                        $this->tp->assign("listing_id", $tmpListingSID);
                        $this->addListing($listingSID, $contractID, false);
                    } elseif (count($productsInfo) == 1) {
                        $productInfo = array_pop($productsInfo);
                        $contractID = $productInfo['contract_id'];
                        $this->tp->assign("listing_id", $tmpListingSID);
                        $this->addListing($listingSID, $contractID, false);
                    } else {
                        $this->tp->assign('listing_id', $tmpListingSID);
                        $this->tp->assign('products_info', $productsInfo);
                        $this->tp->assign('listingTypeID', $this->listingTypeID);
                        $this->tp->display('listing_product_choice.tpl');
                    }
                } else {
                    SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . '/products/?permission=post_' . mb_strtolower($this->listingTypeID));
                }
            }
        } else {
            if ($this->buttonPressedPostToProceed != false) {
                SJB_Session::setValue('proceed_to_posting', true);
                SJB_Session::setValue('productSID', SJB_Request::getInt('productSID', ''));
                SJB_Session::setValue('listing_type_id', $this->listingTypeID);
            }
            if ($this->listingTypeID == 'Job') {
                $returnUrl = SJB_System::getSystemSettings('SITE_URL') . '/add-listing/?listing_type_id=Job';
                $returnUrl = base64_encode($returnUrl);
                SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . '/registration/?user_group_id=Employer&return_url=' . $returnUrl);
            }
            $this->displayErrorTpl('NOT_LOGGED_IN');
        }
    }


    /**
     * @param $error
     */
    public function displayErrorTpl($error)
    {
        $listingTypeName = SJB_ListingTypeManager::getListingTypeNameBySID(SJB_ListingTypeManager::getListingTypeSIDByID($this->listingTypeID));
        $this->tp->assign('listingTypeName', $listingTypeName);
        $this->tp->assign('error', $error);
        $this->tp->display('add_listing_error.tpl');
    }

    /**
     * @param $listingSID
     * @param $contractID
     * @param $productSID
     */
    public function addListing($listingSID, $contractID = false, $productSID = false)
    {
        if ($productSID != false) {
            $extraInfo = SJB_ProductsManager::getProductExtraInfoBySID($productSID);
            $extraInfo['product_sid'] = (string)$extraInfo['product_sid'];
        } else {
            $contract = new SJB_Contract(['contract_id' => $contractID]);
            $extraInfo = $contract->extra_info;
        }
        $listingTypesInfo = SJB_ListingTypeManager::getAllListingTypesInfo();
        if (!$this->listingTypeID && count($listingTypesInfo) == 1) {
            $listingTypeInfo = array_pop($listingTypesInfo);
            $this->listingTypeID = $listingTypeInfo['id'];
        }
        $listingTypeSID = SJB_ListingTypeManager::getListingTypeSIDByID($this->listingTypeID);
        $pages = SJB_PostingPagesManager::getPagesByListingTypeSID($listingTypeSID);
        $pageSID = $this->getPageSID($pages, $listingTypeSID);
        $isPageLast = SJB_PostingPagesManager::isLastPageByID($pageSID, $listingTypeSID);
        $isPreviewListingRequested = SJB_Request::getVar('preview_listing', false, 'POST');
        if (($contractID || !empty($this->buttonPressedPostToProceed)) && $this->listingTypeID) {
            $formSubmitted = isset($_REQUEST['action_add']) || $isPreviewListingRequested;
            /*
             * social plugin
             * complete listing of data from an array of social data
             * if is allowed
             */
            $aAutoFillData = ['formSubmitted' => &$formSubmitted, 'listingTypeID' => &$this->listingTypeID];
            SJB_Event::dispatch('SocialSynchronization', $aAutoFillData);

            $listing = new SJB_Listing($_REQUEST, $listingTypeSID, $pageSID);
            $listing->deleteProperty('featured');
            $listing->deleteProperty('status');
            if ($formSubmitted) {
                $listing->addProperty([
                    'id' => 'contract_id',
                    'type' => 'id',
                    'value' => $contractID,
                    'is_system' => true
                ]);
            }
            $currentUser = SJB_UserManager::getCurrentUser();
            SJB_Event::dispatch('AddListingForm', $listing);

            $listingFormAdd = new SJB_Form($listing);
            $listingFormAdd->registerTags($this->tp);

            $fieldErrors = [];

            if ($formSubmitted && ($this->formSubmittedFromPreview || $listingFormAdd->isDataValid($fieldErrors))) {
                $listing->setUserSID($currentUser->getSID());
                $listing->setProductInfo($extraInfo);

                // listing preview
                if (!empty($listingSID)) {
                    $listing->setSID($listingSID);
                }

                SJB_ListingManager::saveListing($listing);

                if (!empty($this->buttonPressedPostToProceed)) {
                    SJB_ListingManager::unmakeCheckoutedBySID($listing->getSID());
                }

                if ($contractID) {
                    $contract = new SJB_Contract(['contract_id' => $contractID]);
                    $contract->incrementPostingsNumber();
                    SJB_ProductsManager::incrementPostingsNumber($contract->product_sid);
                }

                // >>> SJB-1197
                // check temporary uploaded storage for listing uploads and assign it to saved listing
                $formToken = SJB_Request::getVar('form_token');
                $sessionFilesStorage = SJB_Session::getValue('tmp_uploads_storage');
                $uploadedFields = SJB_Array::getPath($sessionFilesStorage, $formToken);

                if (!empty($uploadedFields)) {
                    foreach ($uploadedFields as $fieldId => $fieldValue) {
                        // get field of listing
                        $tmpUploadedFileId = $fieldValue['file_id'];
                        // rename it to real listing field value
                        $newFileId = $fieldId . "_" . $listing->getSID();
                        $uploadFileSID = SJB_DB::queryValue("SELECT `sid` FROM `uploaded_files` WHERE `id` = ?s", $tmpUploadedFileId);
                        if ($uploadFileSID) {
                            SJB_DB::query("DELETE FROM `uploaded_files` WHERE `id` = ?s", $newFileId);
                        }
                        SJB_DB::query("UPDATE `uploaded_files` SET `id` = ?s WHERE `id` =?s", $newFileId, $tmpUploadedFileId);

                        $listing->setPropertyValue($fieldId, $newFileId);

                        // unset value from session temporary storage
                        $sessionFilesStorage = SJB_Array::unsetValueByPath($sessionFilesStorage, "{$formToken}/{$fieldId}");
                    }

                    //and remove token key from temporary storage
                    $sessionFilesStorage = SJB_Array::unsetValueByPath($sessionFilesStorage, "{$formToken}");
                    SJB_Session::setValue('tmp_uploads_storage', $sessionFilesStorage);

                    SJB_ListingManager::saveListing($listing);
                    $keywords = $listing->getKeywords();
                    SJB_ListingManager::updateKeywords($keywords, $listing->getSID());
                }
                // <<< SJB-1197

                if ($isPageLast && !$isPreviewListingRequested) {

                    /* delete temp preview listing sid */
                    SJB_Session::unsetValue('preview_listing_sid_for_add');

                    // Start Event
                    SJB_Event::dispatch('ListingSaved', $listing);

                    if ($extraInfo['featured']) {
                        SJB_ListingManager::makeFeaturedBySID($listing->getSID());
                    }

                    if (!empty($this->buttonPressedPostToProceed)) {
                        $this->proceedToCheckout($currentUser->getSID(), $productSID, $listing->getSID());
                    } else {
                        if (SJB_Settings::getValue('approve_job') && $listing->getListingTypeSID() == SJB_ListingTypeManager::JOB) {
                            SJB_ListingManager::setStatus($listing->getSID(), SJB_Listing::STATUS_PENDING);
                        } else {
                            SJB_ListingManager::activateListingBySID($listing->getSID());
                        }
                        if ($this->listingTypeID == 'Job') {
                            SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . SJB_TemplateProcessor::listing_url($listing) . '?isBoughtNow=1');
                        }
                        SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . '/manage-' . strtolower($this->listingTypeID) . '/?listing_id=' . $listing->getSID());

                    }
                } elseif ($isPageLast && $isPreviewListingRequested) { // for listing preview
                    SJB_Session::setValue('preview_listing_sid_for_add', $listing->getSID());
                    SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . '/' . strtolower($this->listingTypeID) . '-preview/' . $listing->getSID() . '/');
                } else { // listing steps (pages)
                    SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . "/add-listing/{$this->listingTypeID}/" . SJB_PostingPagesManager::getNextPage($pageSID) . "/" . $listing->getSID());
                }
            } else {
                $listing->deleteProperty('contract_id');
                $listingFormAdd = new SJB_Form($listing);
                if ($formSubmitted) {
                    $listingFormAdd->isDataValid($fieldErrors);
                }
                $listingFormAdd->registerTags($this->tp);
                $template = isset($_REQUEST['input_template']) ? $_REQUEST['input_template'] : "input_form.tpl";
                $formFields = $listingFormAdd->getFormFieldsInfo();

                $this->tp->assign('form_token', SJB_Request::getVar('form_token'));

                $this->tp->assign("contract_id", $contractID);
                $this->tp->assign("listingTypeID", $this->listingTypeID);
                $this->tp->assign('listingTypeStructure', SJB_ListingTypeManager::createTemplateStructure(SJB_ListingTypeManager::getListingTypeInfoBySID($listing->listing_type_sid)));
                $this->tp->assign("field_errors", $fieldErrors);
                $this->tp->assign("form_fields", $formFields);
                $this->tp->assign("pages", $pages);
                $this->tp->assign("pageSID", $pageSID);
                $this->tp->assign("extraInfo", $extraInfo);
                $this->tp->assign("currentPage", SJB_PostingPagesManager::getPageInfoBySID($pageSID));
                $this->tp->assign("isPageLast", $isPageLast);
                $this->tp->assign("nextPage", SJB_PostingPagesManager::getNextPage($pageSID));
                $this->tp->assign("prevPage", SJB_PostingPagesManager::getPrevPage($pageSID));

                $metaDataProvider = SJB_ObjectMother::getMetaDataProvider();
                $this->tp->assign(
                    "METADATA",
                    [
                        "form_fields" => $metaDataProvider->getFormFieldsMetadata($formFields),
                    ]
                );

                /*
                 * social plugin
                 * only for Resume listing types
                 */
                $aAutoFillData = ['tp' => &$this->tp, 'listingTypeID' => &$this->listingTypeID, 'userSID' => $currentUser->getSID()];
                SJB_Event::dispatch('SocialSynchronizationForm', $aAutoFillData);

                $this->tp->display($template);
            }
        }
    }

    /**
     * @param $pages
     * @param $listingTypeSID
     * @return bool|int|mixed
     */
    public function getPageSID($pages, $listingTypeSID)
    {
        $passedParametersViaUri = SJB_Request::getVar('passed_parameters_via_uri', false);
        $pageID = false;
        if ($passedParametersViaUri) {
            $passedParametersViaUri = SJB_UrlParamProvider::getParams();
            $this->listingTypeID = isset($passedParametersViaUri[0]) ? $passedParametersViaUri[0] : $this->listingTypeID;
            $pageID = isset($passedParametersViaUri[1]) ? $passedParametersViaUri[1] : false;
        }
        if (!$pageID) {
            $pageID = $pages[0]['page_id'];
        }
        $pageSID = SJB_PostingPagesManager::getPostingPageSIDByID($pageID, $listingTypeSID);
        return $pageSID;
    }

    /**
     * @param int $currentUserID
     * @param int $productSID
     * @param $proceedToListing
     * @return bool|int|mixed
     */
    public function proceedToCheckout($currentUserID, $productSID, $proceedToListing)
    {
        $errors = [];
        $productInfo = SJB_ProductsManager::getProductInfoBySID($productSID);
        $productInfo['proceedToListing'] = $proceedToListing;
        SJB_ShoppingCart::addToShoppingCart($productInfo, $currentUserID);
        if (!$errors) {
            SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . '/shopping-cart/');
        }
    }
}
