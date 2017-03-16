<?php

class SJB_TextType extends SJB_StringType
{
    protected $default_template = 'text.tpl';

    public function __construct($property_info)
    {
        parent::__construct($property_info);
        if (isset($this->property_info['value'])) {
            if (!empty($this->property_info['user_group_sid']) ||
                !empty($this->property_info['listing_type_sid'])) {
                $this->property_info['value'] = SJB_H::purify($this->property_info['value']);
            }
        }

        $this->property_info['maxlength'] = 65500;
        if (!empty($property_info['maxlength'])) {
            $this->property_info['maxlength'] = $property_info['maxlength'];
        }
    }

    function getPropertyVariablesToAssign()
    {
        return [
            'id' => $this->property_info['id'],
            'type' => $this->property_info['type'],
            'isClassifieds' => $this->property_info['is_classifieds'],
            'value' => $this->property_info['value'],
            'default_value' => $this->property_info['default_value'],
        ];
    }

    function getSQLFieldType()
    {
        return 'LONGTEXT NULL';
    }
}