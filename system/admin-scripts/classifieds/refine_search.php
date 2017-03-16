<?php

class SJB_Admin_Classifieds_RefineSearch extends SJB_Function
{
    public function isAccessible()
    {
        $this->setPermissionLabel(SJB_Acl::ADMIN_SETTINGS);
        return parent::isAccessible();
    }

    public function execute()
    {
        $tp = SJB_System::getTemplateProcessor();
        $action = SJB_Request::getVar('action');
        $field_id = SJB_Request::getVar('field_id', false);

        if ($field_id || $action) {
            switch ($action) {
                case 'save':
                    $listing_type_sid = SJB_Request::getVar('listing_type_sid', false);
                    $userField = 0;
                    if ($listing_type_sid) {
                        if (strstr($field_id, 'user_')) {
                            $field_id = str_replace('user_', '', $field_id);
                            $userField = 1;
                        }
                        if (!SJB_RefineSearch::getFieldByFieldSIDListingTypeSID($field_id, $listing_type_sid, $userField)) {
                            SJB_RefineSearch::addField($field_id, $listing_type_sid, $userField);
                        }
                    }
                    break;
                case 'save_setting':
                    $listing_type_id = SJB_Request::getVar('listing_type_id', false);
                    $refine_search_items_limit = SJB_Request::getVar('refine_search_items_limit', false);
                    if ($listing_type_id) {
                        $settingValue = SJB_Request::getVar('turn_on_refine_search_' . $listing_type_id, 0);
                        if (SJB_Settings::getSettingByName('turn_on_refine_search_' . $listing_type_id) === false) {
                            SJB_Settings::addSetting('turn_on_refine_search_' . $listing_type_id, $settingValue);
                        } else {
                            SJB_Settings::updateSetting('turn_on_refine_search_' . $listing_type_id, $settingValue);
                        }
                    } elseif ($refine_search_items_limit) {
                        if (SJB_Settings::getSettingByName('refine_search_items_limit') === false) {
                            SJB_Settings::addSetting('refine_search_items_limit', $refine_search_items_limit);
                        } else {
                            SJB_Settings::updateSetting('refine_search_items_limit', $refine_search_items_limit);
                        }
                    }
                    break;
                case 'delete':
                    SJB_RefineSearch::removeField($field_id);
                    break;
                case 'reorder':
                    foreach (SJB_Request::getVar('refine_fields', []) as $key => $field) {
                        SJB_DB::query('update `refine_search` set `order` = ?n where `id` = ?n', $key + 1, $field);
                    };
                    break;
            }
        }

        $listingTypes = SJB_ListingTypeManager::getAllListingTypesInfo();
        foreach ($listingTypes as $key => $listingType) {
            $fields = array_merge(SJB_ListingFieldManager::getCommonListingFieldsInfo(), SJB_ListingFieldManager::getListingFieldsInfoByListingType($listingType['sid']));
            foreach ($fields as $field_key => $field) {
                if ($field['type'] == 'location') {
                    if (is_array($field['fields'])) {
                        foreach ($field['fields'] as $subFieldKey => $subField) {
                            if (!in_array($subField['id'], ['Country', 'City', 'State'])) {
                                unset($field['fields'][$subFieldKey]);
                            }
                        }
                        $fields = array_merge($fields, $field['fields']);
                    }
                }
                if (!in_array($field['type'], ['list', 'multilist', 'string', 'boolean'])
                    || in_array($field['id'], ['ApplicationSettings', 'access_type'])
                ) {
                    foreach ($fields as $fieldKey => $searchField) {
                        if ($searchField['id'] == $field['id']) {
                            unset($fields[$fieldKey]);
                        }
                    }
                }
            }

            usort($fields, function($a, $b) {
                if ($a['caption'] == $b['caption']) {
                    return 0;
                }
                return $a['caption'] > $b['caption'] ? 1:-1;
            });

            $listingTypes[$key]['fields'] = $fields;
            if ($key == 'Job') {
                $userFieldSID = SJB_DB::queryValue("SELECT `sid` FROM `user_profile_fields` WHERE `id` = 'CompanyName'");
                if (!empty($userFieldSID)) {
                    $listingTypes[$key]['user_fields'] = SJB_UserProfileFieldManager::getFieldInfoBySID($userFieldSID);
                }
            }
            $listingTypes[$key]['saved_fields'] = SJB_RefineSearch::getFieldsByListingTypeSID($listingType['sid']);
            $listingTypes[$key]['setting'] = SJB_Settings::getSettingByName('turn_on_refine_search_' . $listingType['id']);
        }

        $tp->assign('refine_search_items_limit', SJB_Settings::getSettingByName('refine_search_items_limit'));
        $tp->assign('listingTypes', $listingTypes);
        $tp->display('refine_search.tpl');
    }
}
