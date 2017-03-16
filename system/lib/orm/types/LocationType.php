<?php

class SJB_LocationType extends SJB_Type
{
    public $fields;
    private $table_name;
    public $child;
    protected $default_template = 'location.tpl';

    public function __construct($property_info)
    {
        parent::__construct($property_info);
        $this->fields = isset($property_info['fields']) ? $property_info['fields'] : [];
        $this->table_name = isset($property_info['table_name']) ? $property_info['table_name'] : 'listings';
        $fields_info = isset($property_info['value']) ? $property_info['value'] : [];
        $this->child = new SJB_Complex($this->fields, $this->table_name, $fields_info);
    }

    function getPropertyVariablesToAssign()
    {
        $form = new SJB_Form($this->child);
        $form_fields = $form->getFormFieldsInfo();
        $propertyVariables = parent::getPropertyVariablesToAssign();
        $properties = $this->child->getProperties();
        $propertyVariables['value'] = [];
        foreach ($properties as $name => $property) {
            $variablesToAssign = $property->getPropertyVariablesToAssign();
            $form_fields[$name]['hidden'] = $variablesToAssign['hidden'];
            if ($variablesToAssign['value'] === '') {
                continue;
            } else if (empty($variablesToAssign['value']) && !empty($variablesToAssign['default_value'])) {
                $propertyVariables['value'][$name] = $variablesToAssign['default_value'];
            } else {
                $propertyVariables['value'][$name] = $variablesToAssign['value'];
            }
        }

        $newPropertyVariables = [
            'form_fields' => $form_fields,
            'caption' => $this->property_info['caption'],
            'parentID' => $this->property_info['id'],
            'type' => $this->property_info['type'],
            'isClassifieds' => $this->property_info['is_classifieds'],
            'radius' => SJB_LocationManager::getRadiuses(),
        ];
        $propertyVariables = array_merge($newPropertyVariables, $propertyVariables);
        return $propertyVariables;
    }

    function isValid()
    {
        $properties = $this->child->getProperties();
        $properties = $properties ? $properties : [];
        $errors = [];
        foreach ($properties as $field) {
            if (!$field->type->isEmpty()) {
                $isValid = $field->type->isValid();
                if ($isValid !== true)
                    $errors[$field->caption] = $isValid;
            } elseif ($field->is_required) {
                $errors[$field->caption] = 'EMPTY_VALUE';
            }
        }
        return $errors;
    }

    function getSQLValue()
    {
        $values = explode(' ', $this->property_info['value']);
        $values = array_diff($values, ['']);
        foreach ($values as $key => $value) {
            $value = trim($value);
            $len = strlen($value);
            if ($len < 4) {
                for ($i = $len; $i < 4; $i++) {
                    $value .= '_';
                }
                $values[$key] = $value;
            }
        }
        $value = implode(' ', $values);
        return $value;
    }

    public function prepareLocationRegistrationFields()
    {
        $propertiesList = $this->child->getPropertyList();
        foreach ($propertiesList as $propertyId) {
            $property = $this->child->getProperty($propertyId);
            if (!$property->type->property_info['is_required'] && !$property->type->property_info['hidden']) {
                $property->type->makeHidden();
                $property->type->property_info['madeHidden'] = true;
            }
        }
    }

    function getSQLFieldType()
    {
        return 'VARCHAR(500) NULL';
    }

    function getKeywordValue()
    {
        $childProperties = $this->child->getProperties();

        $keywords = '';
        if ($childProperties) {
            /** @var SJB_ObjectProperty $childProperty */
            foreach ($childProperties as $childProperty) {
                $keywords .= $childProperty->getKeywordValue() . ' ';
            }
        }
        return $keywords;
    }

    function isEmpty()
    {
        return false;
    }
}