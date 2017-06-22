<?php

namespace MedHub\Config;

class CustomerType extends ConfigParameter
{
    const DOCTOR = "doctor";
    const PATIENT = "patient";
    const NULL = "null";

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