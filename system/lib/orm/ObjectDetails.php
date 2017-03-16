<?php

class SJB_ObjectDetails
{
    /**
     * @var SJB_ObjectProperty[]
     */
	var $properties = array();
	var $object_sid;

    public function __construct($object_info)
	{
		$details_info = $this->getDetails();
		foreach ($details_info as $detail_info) {
			if (isset($object_info[$detail_info['id']])) {
				$detail_info['value'] = $object_info[$detail_info['id']];
			}
			else {
				$detail_info['value'] = '';
			}

			$this->properties[$detail_info['id']] = new SJB_ObjectProperty($detail_info);
		}
	}
	
	function getSavablePropertyValues()
	{
		$savable_property_values = array();
		foreach ($this->properties as $key => $property) {
			$savable_property_values[$key] = $this->properties[$key]->getSavableValue();
		}
		return $savable_property_values;
	}

	/**
	 * @return SJB_ObjectProperty[]
	 */
	function getProperties()
	{
	    return $this->properties;
	}
	
	function setObjectSID($sid)
	{
		foreach ($this->properties as $key => $property) {
			$this->properties[$key]->setObjectSID($sid);
		}
		$this->object_sid = $sid;
	}
	
	function addProperty($property_info)
	{
		$property_info['caption'] 		= isset($property_info['caption']) ? $property_info['caption'] : '';
		$property_info['length'] 		= isset($property_info['length']) ? $property_info['length'] : '20';
		$property_info['is_required'] 	= isset($property_info['is_required']) ? $property_info['is_required'] : false;
		$property_info['is_system'] 	= isset($property_info['is_system']) ? $property_info['is_system'] : false;

		if (!empty($property_info['order'])) {
			$this->properties = array_slice($this->properties, 0, $property_info['order'], true) +
				array($property_info['id'] => new SJB_ObjectProperty($property_info)) +
				array_slice($this->properties, $property_info['order'], count($this->properties) - 1, true) ;
		} else {
			$this->properties[$property_info['id']] = new SJB_ObjectProperty($property_info);
		}
		$this->properties[$property_info['id']]->setObjectSID($this->object_sid);
	}

	/**
	 * @param  $property_id
	 * @return SJB_ObjectProperty
	 */
	function getProperty($property_id)
	{
		if (is_array($property_id)) {
			return null;
		}
		if (!$this->propertyIsSet($property_id)) {
			return null;
		}
		return $this->properties[$property_id];
	}

	function deleteProperty($property_id)
	{
	    unset($this->properties[$property_id]);
	}

    function makePropertyRequired($property_id)
    {
        $this->properties[$property_id]->makeRequired();
    }
    
    function makePropertyNotRequired($property_id)
    {
        $this->properties[$property_id]->makeNotRequired();
    }

    function dontSaveProperty($property_id)
    {
        $this->properties[$property_id]->setDontSaveFlag();
    }

    function propertyIsSet($property_id)
    {
        return isset($this->properties[$property_id]);
    }
	
}

