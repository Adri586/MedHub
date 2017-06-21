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

            //Security!
            $url = str_replace(".php", "", $url);
            $url = substr($url, 1);
            $url = str_replace(".", "", $url);
            $url = str_replace("//", "/", $url);
            $url = explode("?", $url)[0];
        }

        if (!isset($url) || $url == "") {
            $url = $this->getDefaultValue();
        }

        $this->value = $url;
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