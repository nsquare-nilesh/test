<?php

class SJB_ListingComplexFieldDetails extends SJB_ObjectDetails
{
	
	public function __construct($listing_field_info)
	{
		$details_info = SJB_ListingComplexFieldDetails::getDetails($listing_field_info);
		foreach ($details_info as $detail_info) {
			if (isset($listing_field_info[$detail_info['id']]))
				$detail_info['value'] = $listing_field_info[$detail_info['id']];
			else 
				$detail_info['value'] = isset($detail_info['value']) ? $detail_info['value'] : '';
			$this->properties[$detail_info['id']] = new SJB_ObjectProperty($detail_info);
		}
	}
	
	public static function getDetails($listing_field_info)
	{
		$common_details_info = array(
				array (
					'id'		=> 'id',
					'caption'	=> 'ID', 
					'type'		=> 'unique_string',
					'validators' => array(
						'SJB_IdValidator',
						'SJB_UniqueSystemComplexValidator'
					),
					'length'	=> '20',
                    'table_name'=> 'listing_complex_fields',
					'is_required'=> true,
					'is_system'	=> true,
				),
				array (
					'id'		=> 'caption',
					'caption'	=> 'Caption', 
					'type'		=> 'string',
					'length'	=> '20',
                    'table_name'=> 'listing_complex_fields',
					'is_required'=> true,
					'is_system'	=> true,
				),
				array (
					'id'		=> 'type',
					'caption'	=> 'Type',
					'type'		=> 'list',
					'list_values' => array(
											array(
												'id' => 'list',
												'caption' => 'List',
											),
											array(
												'id' => 'multilist',
												'caption' => 'MultiList',
											),
											array(
												'id' => 'string',
												'caption' => 'String',
											),
											array(
												'id' => 'text',
												'caption' => 'Text',
											),
											array(
												'id' => 'integer',
												'caption' => 'Integer',
											),
											array(
												'id' => 'float',
												'caption' => 'Float',
											),
                                            array(
                                                'id' => 'date',
                                                'caption' => 'Date',
                                            ),
										),
					'length'	=> '',
					'is_required'=> true,
					'is_system' => true,
				),
				array(
					'id' => 'is_required',
					'caption' => 'Required',
					'type' => 'boolean',
					'length' => '20',
					'table_name' => 'listing_complex_fields',
					'is_required' => false,
					'is_system' => true,
				),
		);

		$field_type = isset($listing_field_info['type']) ? $listing_field_info['type'] : null;
		$extra_details_info = SJB_ListingComplexFieldDetails::getDetailsByFieldType($field_type);
		return array_merge($common_details_info, $extra_details_info);
	}
	
	public static function getDetailsByFieldType($field_type)
	{
		return SJB_TypesManager::getExtraDetailsByFieldType($field_type);
	}
}
