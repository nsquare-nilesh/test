<?php

class SJB_Admin_Users_EditUser extends SJB_Function
{
    public function isAccessible()
    {
        $this->setPermissionLabel(SJB_Acl::ADMIN_JOB_BOARD);
        return parent::isAccessible();
    }

    public function execute()
    {
        $tp = SJB_System::getTemplateProcessor();
        $parent_name = null;
        $user_sid = SJB_Request::getVar('user_sid', false);

        if (!is_null($user_sid)) {
            $user_info = SJB_UserManager::getUserInfoBySID($user_sid);
            if (!$user_info) {
                echo SJB_System::executeFunction('miscellaneous', '404_not_found');
                return;
            }
            $user_info = array_merge($user_info, $_REQUEST);
            $form_submitted = SJB_Request::getVar('action_name');

            $user = new SJB_User($user_info, $user_info['user_group_sid']);
            $user->setSID($user_info['sid']);

            $user->deleteProperty('active');
            $user->makePropertyNotRequired('password');
            if ($user->getUserGroupSID() == SJB_UserGroup::JOBSEEKER) {
                $user->deleteProperty('featured');
            }

            $edit_user_form = new SJB_Form($user);
            $errors = [];

            if ($form_submitted && $edit_user_form->isDataValid($errors)) {
                $password_value = $user->getPropertyValue('password');
                $properties = null;
                if (empty($password_value['original'])) {
                    $properties = $user->getProperties();
                    $user->deleteProperty('password');
                }

                SJB_UserManager::saveUser($user);

                // needs to check session for ajax-uploaded files, and set it to user profile
                $tmpUploadsStorage = SJB_Session::getValue('tmp_uploads_storage');
                $formToken = SJB_Request::getVar('form_token');
                if (!empty($formToken)) {
                    $tmpUploadedFields = SJB_Array::getPath($tmpUploadsStorage, $formToken);

                    if (!is_null($tmpUploadsStorage) && is_array($tmpUploadedFields)) {
                        // prepare user profile fields array
                        $userProfileFieldsInfo = SJB_UserProfileFieldManager::getAllFieldsInfo();
                        $userProfileFields = [];
                        foreach ($userProfileFieldsInfo as $field) {
                            $userProfileFields[$field['id']] = $field;
                        }

                        // look for temporary values
                        foreach ($tmpUploadedFields as $fieldId => $fieldInfo) {
                            // check field ID for valid ID in user profile fields
                            if (!array_key_exists($fieldId, $userProfileFields) || empty($fieldInfo)) {
                                continue;
                            }

                            $fieldType = $userProfileFields[$fieldId]['type'];
                            $profilePropertyId = $fieldId . '_' . $user->getSID();

                            switch (strtolower($fieldType)) {
                                case 'file':
                                    // change temporary file ID
                                    SJB_DB::query('UPDATE `uploaded_files` SET `id` = ?s WHERE `id` = ?s', $profilePropertyId, $fieldInfo['file_id']);

                                    // set value of user property to new uploaded file
                                    $user->setPropertyValue($fieldId, $profilePropertyId);
                                    break;

                                case 'logo':
                                    // change temporary file ID and thumb ID
                                    SJB_DB::query('UPDATE `uploaded_files` SET `id` = ?s WHERE `id` = ?s', $profilePropertyId, $fieldInfo['file_id']);
                                    SJB_DB::query('UPDATE `uploaded_files` SET `id` = ?s WHERE `id` = ?s', $profilePropertyId . '_thumb', $fieldInfo['file_id'] . '_thumb');

                                    // set value of user property to new uploaded file
                                    $user->setPropertyValue($fieldId, $profilePropertyId);
                                    break;

                                default:
                                    break;
                            }
                            $tmpUploadsStorage = SJB_Array::unsetValueByPath($tmpUploadsStorage, "{$formToken}/{$fieldId}");
                        }

                        // and save user with new fields data
                        SJB_UserManager::saveUser($user);
                        SJB_Authorization::updateCurrentUserSession();

                        // clean temporary storage
                        $tmpUploadsStorage = SJB_Array::unsetValueByPath($tmpUploadsStorage, "{$formToken}");

                        // CLEAR TEMPORARY SESSION STORAGE
                        SJB_Session::setValue('tmp_uploads_storage', $tmpUploadsStorage);
                    }
                }

                if ($form_submitted == 'save_info') {
                    $userGroupInfo = SJB_UserGroupManager::getUserGroupInfoBySID($user_info['user_group_sid']);
                    SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . '/manage-users/' . mb_strtolower($userGroupInfo['id'], 'utf8') . '/?restore=1');
                }
                if (!empty($properties)) {
                    $user->details->properties = $properties;
                }
            }

            $listingTypes = SJB_ListingTypeManager::getAllListingTypesInfo();
            $products = SJB_ProductsManager::getProductsInfoByUserGroupSID($user_info['user_group_sid']);
            $allowedListingTypes = array();
            foreach ($products as $product) {
                if (!empty($product['listing_type_sid']) && empty($allowedListingTypes[$product['listing_type_sid']])) {
                    foreach ($listingTypes as $listingType) {
                        if ($product['listing_type_sid'] == $listingType['sid']) {
                            $allowedListingTypes[$product['listing_type_sid']] = $listingType;
                        }
                    }
                }
            }

            $edit_user_form = SJB_ObjectMother::createForm($user);
            $edit_user_form->registerTags($tp);

            // При неудачном изменении имени оно тут не подходящее
            $user_info['username'] = SJB_UserManager::getUserNameByUserSID($user_sid);

            $tp->assign('form_fields', $edit_user_form->getFormFieldsInfo());
            $tp->assign('errors', $errors);
            $tp->assign('listingTypes', $allowedListingTypes);
            $tp->assign('user_info', $user_info);
            $tp->assign('user_group_info', SJB_UserGroupManager::getUserGroupInfoBySID($user_info['user_group_sid']));
            $tp->assign('parent_name', $parent_name);
            $tp->display('edit_user.tpl');
        }
    }
}
