<?php

class SJB_IntegerType extends SJB_Type
{
    protected $default_template = 'integer.tpl';

    function isValid()
    {
        $value = $this->property_info['value'];

        $i18n = SJB_I18N::getInstance();
        if (!$i18n->isValidInteger($value)) {
            return 'NOT_INT_VALUE';
        }

        $val = intval($this->getSQLValue());
        if ($val >= 2147483647) {
            return 'DATA_LENGTH_IS_EXCEEDED';
        }

        if (!empty($this->property_info['validators'])) {
            foreach ($this->property_info['validators'] as $validator) {
                $isValid = $validator::isValid($this);
                if ($isValid !== true)
                    return $isValid;
            }
        }
        return true;
    }

    function getSQLValue()
    {
        $value = SJB_ObjectMother::createI18N()->getInput('integer', $this->property_info['value']);
        return $value ? $value : null;
    }

    function getKeywordValue()
    {
        $i18n = SJB_ObjectMother::createI18N();
        return $i18n->getInput('integer', $this->property_info['value']);
    }

    function getSQLFieldType()
    {
        return "INT( 10 ) NULL";
    }
}
