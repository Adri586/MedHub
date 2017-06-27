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

    public function getTranslationForValue($value, $lang)
    {

        switch ($value) {
            case Languages::getConfigName(): {
                switch ($lang) {
                    case Languages::GERMAN: {
                        return "Sprache";
                    }

                    case Languages::ENGLISH: {
                        return "Language";
                    }
                }

                break;
            }

            case Languages::GERMAN: {
                switch ($lang) {
                    case Languages::GERMAN: {
                        return "Deutsch";
                    }

                    case Languages::ENGLISH: {
                        return "Englisch";
                    }
                }

                break;
            }

            case Languages::ENGLISH: {
                switch ($lang) {
                    case Languages::GERMAN: {
                        return "German";
                    }

                    case Languages::ENGLISH: {
                        return "English";
                    }
                }

                break;
            }
        }

        return "Missing Translation";
    }

}