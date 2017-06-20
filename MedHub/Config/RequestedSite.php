<?php

namespace MedHub\Config;

class RequestedSite extends ConfigParameter
{
    public $value = "";

    public function __construct()
    {
        parent::__construct();

        if (isset($_SERVER["REQUEST_URI"])) {

            $url = $_SERVER["REQUEST_URI"];
        } else {
            $url = $this->getDefaultValue();
        }

        $this->value = str_replace(".php", "", $url);
        $this->value = str_replace("/", "_", $url);
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