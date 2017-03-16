<?php

class SJB_Admin_Classifieds_EditListingTypeField extends SJB_Function
{
    public function isAccessible()
    {
        $this->setPermissionLabel(SJB_Acl::ADMIN_SETTINGS);
        return parent::isAccessible();
    }

	public function execute()
	{
		$tp = SJB_System::getTemplateProcessor();
		$listing_field_sid = SJB_Request::getVar('sid', null);

		if (!is_null($listing_field_sid)) {
			$listingFieldInfo = SJB_ListingFieldManager::getFieldInfoBySID($listing_field_sid);
			if (!$listingFieldInfo) {
				return;
			}
			$old_listing_field_id = $listingFieldInfo['id'];
			$listingFieldInfo = array_merge($listingFieldInfo, $_REQUEST);
			$listing_field = new SJB_ListingField($listingFieldInfo, $listingFieldInfo['listing_type_sid']);
			$listing_field->setSID($listing_field_sid);
			$formSubmitted = SJB_Request::getVar('action', '');
			if (!in_array($listing_field->field_type, array('picture', 'file', 'complex'))) {
				$user_groups = SJB_UserGroupManager::getAllUserGroupsInfo();
				$list_values = array();
				foreach ($user_groups as $user_group) {
					$list_values = array_merge($list_values, SJB_UserProfileFieldManager::getFieldsInfoByUserGroupSID($user_group['sid']));
				}
			}
			if (in_array($listing_field->field_type, array('multilist'))) {
				$listing_field->addDisplayAsProperty($listingFieldInfo['display_as']);
			}

			$edit_form = new SJB_Form($listing_field);
			$edit_form->makeDisabled("type");

			$errors = array();

			if ($formSubmitted && $edit_form->isDataValid($errors)) {
                $vals = SJB_Request::getVar('item_value', []);
                $itemManager = new SJB_ListingFieldListItemManager();
                foreach ($vals as $order => $val) {
                    $list_item = new SJB_ListItem();
                    $list_item->setFieldSID($listing_field_sid);
                    if (key($val) != 'new') {
                        $list_item->setSID(key($val));
                    }
                    $list_item->setValue(current($val));

                    if ($list_item->getSID() && $list_item->getValue() === '') {
                        $itemManager->deleteListItemBySID($list_item->getSID());
                    } elseif ($list_item->getValue() != '') {
                        $itemManager->saveListItem($list_item, $order);
                    }
                }
				SJB_ListingFieldManager::saveListingField($listing_field);
				SJB_ListingFieldManager::changeListingPropertyIDs($listingFieldInfo['id'], $old_listing_field_id);

				if ($formSubmitted == 'save_info') {
					SJB_HelperFunctions::redirect(SJB_System::getSystemSettings("SITE_URL") . "/edit-listing-type/?sid=" . $listing_field->getListingTypeSID());
				}
			}

			$edit_form->registerTags($tp);
			$tp->assign("form_fields", $edit_form->getFormFieldsInfo());
			$tp->assign("errors", $errors);
			$tp->assign("listing_type_sid", $listing_field->getListingTypeSID());
			$tp->assign("field_type", $listing_field->getFieldType());
			$tp->assign("field_sid", $listing_field->getSID());
			$listing_type_info = SJB_ListingTypeManager::getListingTypeInfoBySID($listing_field->getListingTypeSID());
			$tp->assign("listing_type_info", $listing_type_info);
			$tp->assign("listing_field_info", $listingFieldInfo);
			$tp->display("edit_listing_type_field.tpl");
		}
	}
}
