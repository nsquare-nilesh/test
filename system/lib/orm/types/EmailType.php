<?php

class SJB_EmailType extends SJB_Type
{
    protected $default_template = 'email.tpl';

    function getPropertyVariablesToAssign()
    {
        return [
            'id' => $this->property_info['id'],
            'value' => $this->property_info['value'],
        ];
    }

    function isValid()
    {
        $email = $this->property_info['value'];
        if (
            !preg_match("/^[a-zA-Z0-9\\._-]+@[a-zA-Z0-9\\._-]+\\.[a-zA-Z]{2,}$/", $email) ||
            !getmxrr(preg_replace('/.+@/u', '', $email), $hosts)
        ) {
            return 'NOT_VALID_EMAIL_FORMAT';
        }
        return true;
    }
}
