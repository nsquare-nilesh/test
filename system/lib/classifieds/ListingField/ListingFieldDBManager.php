<?php

class SJB_ListingFieldDBManager extends SJB_ObjectDBManager
{
	public static function getListingFields($pageID)
	{
		if ($pageID)
			$GLOBALS['listing_fields'][$pageID] = SJB_DB::query('SELECT lf.*, rlfpp.`order` FROM listing_fields lf INNER JOIN `relations_listing_fields_posting_pages` rlfpp ON rlfpp.`field_sid`=lf.`sid` WHERE rlfpp.`page_sid`=?n AND lf.`parent_sid` IS NULL  ORDER BY rlfpp.`order`', $pageID);
		else 
			$GLOBALS['listing_fields'][$pageID] = SJB_DB::query('SELECT * FROM listing_fields WHERE `parent_sid` IS NULL ORDER BY `order`');
	}
	
	public static function getListingFieldsValue($value,$key='sid', $pageID = 0)
	{
		if (!isset($GLOBALS['listing_fields'][$pageID]))
			SJB_ListingFieldDBManager::getListingFields($pageID);
		$result = array();
		foreach ($GLOBALS['listing_fields'][$pageID] as $row) {
			if ($row[$key] == $value )
				$result[] =  $row;
		}
		if (count($result) == 0)
			return array();	

		return $result;
	}
	
	public static function getListingComplexFieldsValue($field_sid)
	{
		return SJB_DB::query('SELECT * FROM `listing_complex_fields` WHERE `field_sid`=?n  ORDER BY `order` ', $field_sid);
	}

	public static function getCommonListingFieldsInfo()
	{
		return SJB_ListingFieldDBManager::getListingFieldsInfoByListingType(0);
	}
	
	public static function saveListingField($listing_field, $pages = array())
	{
		$fieldID = false;
		$sid = $listing_field->getSID();
		if ($sid) {
			$fieldInfo = parent::getObjectInfo('listing_fields', $sid);
			if (!empty($fieldInfo['id']))
				$fieldID = $fieldInfo['id'];
		}
		parent::saveObject('listing_fields', $listing_field);
        parent::saveField('listings', 'listing_fields', $listing_field, $fieldID);
		if ($listing_field->getOrder())
		    return true;
		$max_order = SJB_DB::queryValue('SELECT MAX(`order`) FROM `listing_fields` WHERE `listing_type_sid` = ?n', $listing_field->getListingTypeSID());
		$max_order = empty($max_order) ? 0 : $max_order;
		
		foreach ($pages as $page)
			SJB_PostingPagesManager::addListingFieldOnPage($listing_field->getSID(), $page['sid'],  $page['listing_type_sid']);

		return SJB_DB::query('UPDATE `listing_fields` SET `listing_type_sid` = ?n, `order` = ?n WHERE `sid` = ?n',
							$listing_field->getListingTypeSID(), ++$max_order, $listing_field->getSID());
	}

	public static function getLocationFieldsInfoById($fieldId)
	{
		$fieldInfo = null;
		$parentInfo = SJB_ListingFieldDBManager::getListingFieldInfoByID('Location');
		$fields = SJB_ListingFieldManager::getListingFieldsInfoByParentSID($parentInfo['sid']);

		if (!empty($fields)) {
			foreach ($fields as $field) {
				if ('Location_' . $field['id'] == $fieldId) {
					return SJB_ListingFieldDBManager::getListingFieldInfoBySID($field['sid']);
				}
			}
		} else {
			return false;
		}
	}

	public static function saveListingComplexField($listing_field)
	{
		$parentSID = $listing_field->getProperty('field_sid')->value;
		parent::saveObject('listing_complex_fields', $listing_field, time());
		if ($listing_field->getOrder())
		    return true;
		$max_order = SJB_DB::queryValue('SELECT MAX(`order`) FROM listing_complex_fields WHERE field_sid = ?n', $parentSID);
		$max_order = empty($max_order) ? 0 : $max_order;
		return SJB_DB::query('UPDATE listing_complex_fields SET `order` = ?n WHERE sid = ?n',
							++$max_order, $listing_field->getSID());
	}

	public static function typeToCaption($info)
	{
		$fields = [
			'string' => 'Text Field',
			'multilist' => 'Multiselect',
			'text' => 'Text Area',
			'integer' => 'Number',
			'date' => 'Date',
			'file' => 'File',
			'youtube' => 'YouTube Video',
			'boolean' => 'Checkbox',
			'list' => 'Dropdown',
			'location' => 'Location',
			'logo' => 'Logo',
			'google_place' => 'Location',
			'picture' => 'Picture',
			'complex' => 'Complex',
			'password' => 'Password',
			'unique_email' => 'Email',
        ];
		if ($info['id'] == 'access_type') {
			return 'Checkbox';
		}
		return empty($fields[$info['type']]) ? $info['type'] : $fields[$info['type']];
	}
	
	public static function getListingFieldInfoBySID($listing_field_sid, $table = 'listing_fields')
	{
		$cache = SJB_Cache::getInstance();
		$cacheId = md5('SJB_ListingFieldDBManager::getListingFieldInfoBySID' . $listing_field_sid . $table);
		if ($cache->test($cacheId)) {
			$listing_field_info = $cache->load($cacheId);
		} else {
			$listing_field_info = parent::getObjectInfo($table, $listing_field_sid);
			if ($listing_field_info) {
				$listing_field_info['typeCaption'] = self::typeToCaption($listing_field_info);
				$listing_field_info['is_reserved'] = strpos($listing_field_info['id'], 'id_') !== 0;
				$cache->save($listing_field_info, $cacheId, array(SJB_Cache::TAG_FIELDS));
			}
		}
		if (empty($listing_field_info)) {
			return null;
		}
		SJB_ListingFieldDBManager::setComplexFields($listing_field_info);
		return $listing_field_info;
	}
	
	public static function getListingComplexFieldInfoBySID($listing_field_sid)
	{
		$listing_field_info = parent::getObjectInfo('listing_complex_fields', $listing_field_sid);
		$listing_field_info['typeCaption'] = self::typeToCaption($listing_field_info);
		SJB_ListingFieldDBManager::setComplexFields($listing_field_info);
		return $listing_field_info;
	}
	
	function getListingFieldCollectionBySIDs($sids)
	{
		$request_creator = new SJB_ListingFieldRequestCreator($sids);
		$request = $request_creator->getRequest();
		$listing_collection_field_info = SJB_DB::query($request);
		foreach($listing_collection_field_info as $key => $listing_field_info)			
			SJB_ListingFieldDBManager::setComplexFields($listing_collection_field_info[$key]);
		return $listing_collection_field_info;
	}
	
	public static function setComplexFields(&$listing_field_info)
	{
        switch ($listing_field_info['type']) {
            case 'list':
            case 'multilist':
				$listing_field_info['list_values'] = SJB_ListingFieldDBManager::getListValuesBySID($listing_field_info['sid']);
                break;
            case 'complex':
                $listing_field_info['fields'] = SJB_ListingFieldDBManager::getListingFieldsInfoByParentSID($listing_field_info['sid']);
			    $listing_field_info['table_name'] = 'listings';
				break;
			case 'location':
				$listing_field_info['fields'] = SJB_ListingFieldManager::getListingFieldsInfoByParentSID($listing_field_info['sid']);
				break;
        }
        $listing_field_info['is_classifieds'] = 1;
	}

	public static function getListValuesBySID($listing_field_sid)
	{
		$ListingFieldListItemManager = new SJB_ListingFieldListItemManager;
		$values = $ListingFieldListItemManager->getHashedListItemsByFieldSID($listing_field_sid);
		$field_values = array();
		foreach ($values as $key => $value)
			$field_values[] = array('id' => $key, 'caption' => $value);
		return $field_values;
	}

	public static function getListingFieldInfoByID($listing_field_id)
	{
		$cache = SJB_Cache::getInstance();
		$cacheId = md5('SJB_ListingFieldDBManager::getListingFieldInfoByID' . $listing_field_id);
		if ($cache->test($cacheId))
			return $cache->load($cacheId);

		$result = null;
		$sid = SJB_ListingFieldDBManager::getListingFieldsValue($listing_field_id, 'id');
		if (!empty($sid)) {
			$listing_field_sid = $sid[0]['sid'];
			$result = parent::getObjectInfo('listing_fields', $listing_field_sid);
		}
		$cache->save($result, $cacheId, array(SJB_Cache::TAG_FIELDS));
		return $result;
	}

	/**
	 * @param array $sids
	 * @return array|null
	 */
	public static function getMultilistValuesBySids(array $sids)
	{
		return SJB_DB::query("SELECT `value` FROM `listing_field_list` WHERE `sid` IN (?l)", $sids);
	}

	public static function deleteListingFieldBySID($listing_field_sid)
	{
		$listing_field_info = SJB_ListingFieldDBManager::getListingFieldInfoBySID($listing_field_sid);
		if (!strcasecmp('list', $listing_field_info['type'])) {
			SJB_DB::query('DELETE FROM listing_field_list WHERE field_sid = ?n' . $listing_field_sid);
		} elseif (!strcasecmp('location', $listing_field_info['type'])) {
			SJB_DB::query('DELETE FROM listing_fields WHERE parent_sid = ?n', $listing_field_sid);
		} elseif (!strcasecmp('complex', $listing_field_info['type'])) {
			$subFields = SJB_ListingComplexFieldManager::getListingFieldsInfoByParentSID($listing_field_sid);
			foreach ($subFields as $subField) {
				SJB_ListingComplexFieldManager::deleteListingFieldBySID($subField['sid'], $listing_field_sid);
			}
		}
		if (parent::deleteObjectInfoFromDB('listing_fields', $listing_field_sid)) {
			if (!strcasecmp('location', $listing_field_info['type'])) {
				parent::deleteField('listings', $listing_field_info['id']."_Country");
				parent::deleteField('listings', $listing_field_info['id']."_State");
				parent::deleteField('listings', $listing_field_info['id']."_City");
				parent::deleteField('listings', $listing_field_info['id']."_ZipCode");
				parent::deleteField('latitude', $listing_field_info['id']."_Latitude");
				parent::deleteField('longitude', $listing_field_info['id']."_Longitude");
			}
			return parent::deleteField('listings', $listing_field_info['id']);
		}
		return false;
	}
	
	public static function deleteComplexListingFieldBySID($listing_field_info) 
	{
		if (!strcasecmp('list', $listing_field_info->field_type))
			SJB_DB::query('DELETE FROM listing_field_list WHERE field_sid = ?n' . $listing_field_info->sid);
		return parent::deleteObjectInfoFromDB('listing_complex_fields', $listing_field_info->sid);
	}
	
	public static function getListingFieldsInfoByListingType($listing_type_sid, $pageID = 0)
	{
		$sids = SJB_ListingFieldDBManager::getListingFieldsValue($listing_type_sid,'listing_type_sid', $pageID);
		$listing_fields_info = array();
		$i = 0;
		foreach ($sids as $sid) {
			$listing_fields_info[$i] = SJB_ListingFieldDBManager::getListingFieldInfoBySID($sid['sid']);
			$listing_fields_info[$i]['order'] = isset($sid['order'])?$sid['order']:$listing_fields_info[$i]['order'];
			$listing_fields_info[$i]['is_classifieds'] = 1;
			$i++;
		}
		return $listing_fields_info;
	}
	
	public static function getListingFieldsInfoByParentSID($field_id)
	{
		if (SJB_MemoryCache::has('ListingFieldsInfoByParentSID' . $field_id)) {
			$listing_fields_info = SJB_MemoryCache::get('ListingFieldsInfoByParentSID' . $field_id);
		} else {
			$sids = SJB_ListingFieldDBManager::getListingComplexFieldsValue($field_id, 'field_sid');
			$listing_fields_info = array();
			foreach ($sids as $sid) {
				$listing_fields_info[] = SJB_ListingFieldDBManager::getListingComplexFieldInfoBySID($sid['sid']);
			}
			SJB_MemoryCache::set('ListingFieldsInfoByParentSID' . $field_id, $listing_fields_info);
		}
		return $listing_fields_info;
	}

	public static function deleteFieldProperties($field_id, $listing_type_sid)
    {
        if ($listing_type_sid)
            return SJB_DB::query('DELETE FROM listings_properties WHERE `id`=?s AND object_sid IN (SELECT sid FROM listings WHERE listing_type_sid=?n)', $field_id, $listing_type_sid);
        return SJB_DB::query('DELETE FROM listings_properties WHERE `id`=?s', $field_id);
    }
	
    public static function deleteComplexFieldProperties($field_id)
    {
        return SJB_DB::query('DELETE FROM listings_properties WHERE `id`=?s', $field_id);
    }
	
	public static function getComplexField_fieldSIDbyID($field_id)
	{
		$result = array_shift(SJB_DB::query('SELECT `field_sid` FROM `listing_complex_fields` WHERE `id` = ?s', $field_id));
		return !empty($result['field_sid']) ? $result['field_sid'] : false;
	}

	public static function getComplexFieldSIDbyID($fieldId)
	{
		return SJB_DB::queryValue('SELECT `sid` FROM `listing_complex_fields` WHERE `id` = ?s', $fieldId);
	}
}

