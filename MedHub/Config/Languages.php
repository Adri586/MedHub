<?php

namespace MedHub\Config;

class Languages extends ConfigParameter
{
    const GERMAN = "de";
    const ENGLISH = "en";


    public static function getConfigName()
    {
        return "language";
    }

    public function getDefaultValue()
    {
        return Languages::ENGLISH;
    }

    public function getConfigValues()
    {
        return [Languages::GERMAN, Languages::ENGLISH];
    }
}