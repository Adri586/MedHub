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

    public static function getTranslationForValue($value, $lang)
    {
        switch ($value) {

            case Themes::getConfigName(): {
                switch ($lang) {
                    case Languages::GERMAN: {
                        return "Design";
                    }

                    case Languages::ENGLISH: {
                        return "Theme";
                    }
                }

                break;
            }

            case Themes::DARK: {
                switch ($lang) {
                    case Languages::GERMAN: {
                        return "Dunkel";
                    }

                    case Languages::ENGLISH: {
                        return "Dark";
                    }
                }

                break;
            }

            case Themes::BRIGHT: {
                switch ($lang) {
                    case Languages::GERMAN: {
                        return "Hell";
                    }

                    case Languages::ENGLISH: {
                        return "Bright";
                    }
                }

                break;
            }
        }

        return "Missing Translation";
    }
}