<?php

namespace MedHub\Config;

class RequestedSite extends ConfigParameter
{
    public $value = "";

    public function __construct()
    {
        parent::__construct();

        if (isset($_REQUEST[$this->getConfigName()])) {
            $this->value = $_REQUEST[$this->getConfigName()];
        } else {
            $this->value = $this->getDefaultValue();
        }

    }

    public function setValue($newValue)
    {
//Nothing
    }

    public function getValue()
    {
        return $this->value;
    }

    public function save()
    {
//Nothing
    }

    public static function getConfigName()
    {
        return "requestedSite";
    }

    public function getDefaultValue()
    {
        return "index";
    }

    public function getConfigValues()
    {
        return [];
    }
}