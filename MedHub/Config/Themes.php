<?php

namespace MedHub\Config;

class Themes extends ConfigParameter
{
    const DARK = "dark";
    const BRIGHT = "bright";


    public static function getConfigName()
    {
        return "theme";
    }

    public function getDefaultValue()
    {
        return Themes::BRIGHT;
    }

    public function getConfigValues()
    {
        return [Themes::DARK, Themes::BRIGHT];
    }
}