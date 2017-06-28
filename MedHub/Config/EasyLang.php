<?php

namespace MedHub\Config;

class EasyLang extends ConfigParameter
{
    const TRUE = "true";
    const FALSE = "false";


    public static function getConfigName()
    {
        return "easylang";
    }

    public function getDefaultValue()
    {
        return EasyLang::FALSE;
    }

    public function getConfigValues()
    {
        return [EasyLang::TRUE, EasyLang::FALSE];
    }

    public static function getTranslationForValue($value, $lang)
    {

        switch ($value) {
            case EasyLang::getConfigName(): {
                switch ($lang) {
                    case Languages::GERMAN: {
                        return "Einfache Sprache";
                    }

                    case Languages::ENGLISH: {
                        return "Easy Language";
                    }
                }

                break;
            }

            case EasyLang::TRUE: {
                switch ($lang) {
                    case Languages::GERMAN: {
                        return "Ja";
                    }

                    case Languages::ENGLISH: {
                        return "Yes";
                    }
                }

                break;
            }

            case EasyLang::FALSE: {
                switch ($lang) {
                    case Languages::GERMAN: {
                        return "Nein";
                    }

                    case Languages::ENGLISH: {
                        return "No";
                    }
                }

                break;
            }
        }

        return "Missing Translation";
    }

}