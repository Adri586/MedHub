<?php

namespace MedHub\Config;

class CustomerType extends ConfigParameter
{
    const MEDICAL_STAFF = "medical_staff";
    const PATIENT = "patient";
    const NULL = "null";

    public static function getConfigName()
    {
        return "customerType";
    }

    public function getDefaultValue()
    {
        return CustomerType::NULL;
    }

    public function getConfigValues()
    {
        return [CustomerType::MEDICAL_STAFF, CustomerType::PATIENT, CustomerType::NULL];
    }

    public static function getTranslationForValue($value, $lang)
    {
        switch ($value) {

            case CustomerType::getConfigName(): {
                switch ($lang) {
                    case Languages::GERMAN_EASY:
                    case Languages::GERMAN: {
                        return "Käuferart";
                    }

                    case Languages::ENGLISH: {
                        return "Customer Type";
                    }
                }

                break;
            }

            case CustomerType::MEDICAL_STAFF: {
                switch ($lang) {
                    case Languages::GERMAN_EASY:
                    case Languages::GERMAN: {
                        return "Fachpersonal";
                    }

                    case Languages::ENGLISH: {
                        return "Medical Staff";
                    }
                }

                break;
            }

            case CustomerType::PATIENT: {
                switch ($lang) {
                    case Languages::GERMAN_EASY:
                    case Languages::GERMAN: {
                        return "Patient";
                    }

                    case Languages::ENGLISH: {
                        return "Patient";
                    }
                }

                break;
            }
        }

        return "Missing Translation";
    }
}