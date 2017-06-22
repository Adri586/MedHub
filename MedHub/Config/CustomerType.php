<?php

namespace MedHub\Config;

class CustomerType extends ConfigParameter
{
    const DOCTOR = "doctor";
    const PATIENT = "patient";
    const NULL = "null";

    public function __construct()
    {
        parent::__construct();

        if ($this->getValue() == CustomerType::NULL) {
            
        }
    }


    public static function getConfigName()
    {
        return "customerType";
    }

    public function getDefaultValue()
    {
        return CustomerType::NULL;
    }

    public function getConfigValues()
    {
        return [CustomerType::DOCTOR, CustomerType::PATIENT, CustomerType::NULL];
    }
}