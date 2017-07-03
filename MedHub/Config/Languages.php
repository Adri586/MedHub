<?php

namespace MedHub\Config;

class Languages extends ConfigParameter
{
    const GERMAN = "de";
    const ENGLISH = "en";
    const GERMAN_EASY = "de_easy";


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
        return [Languages::GERMAN, Languages::GERMAN_EASY, Languages::ENGLISH];
    }

    public static function getTranslationForValue($value, $lang)
    {

        switch ($value) {
            case Languages::getConfigName(): {
                switch ($lang) {
                    case Languages::GERMAN_EASY:
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
                    case Languages::GERMAN_EASY:
                    case Languages::GERMAN: {
                        return "Deutsch";
                    }

                    case Languages::ENGLISH: {
                        return "German";
                    }
                }

                break;
            }

            case Languages::ENGLISH: {
                switch ($lang) {
                    case Languages::GERMAN_EASY:
                    case Languages::GERMAN: {
                        return "Englisch";
                    }

                    case Languages::ENGLISH: {
                        return "English";
                    }
                }

                break;
            }

            case Languages::GERMAN_EASY: {
                switch ($lang) {
                    case Languages::GERMAN_EASY:
                    case Languages::GERMAN: {
                        return "Deutsch (Einfach)";
                    }

                    case Languages::ENGLISH: {
                        return "German (Easy)";
                    }
                }
            }
        }

        return "Missing Translation";
    }

}