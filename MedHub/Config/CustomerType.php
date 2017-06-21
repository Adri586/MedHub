<?php

namespace MedHub\Config;

class CustomerType extends ConfigParameter
{
    const DOCTOR = "doctor";
    const NORMAL = "normal";


    public static function getConfigName()
    {
        return "customerType";
    }

    public function getDefaultValue()
    {
        return CustomerType::NORMAL;
    }

    public function getConfigValues()
    {
        return [CustomerType::DOCTOR, CustomerType::NORMAL];
    }
}