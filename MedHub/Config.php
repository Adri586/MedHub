<?php

namespace MedHub;

use MedHub\Config\ConfigParameter;
use MedHub\Config\CustomerType;
use MedHub\Config\Languages;
use MedHub\Config\RequestedSite;
use MedHub\Config\Themes;

/**
 * The Config which gets and saves the ConfigParameter.
 * Class Config
 * @package MedHub
 */
class Config
{

    /**
     * @var array The Array where all Config Values are stored
     */
    public $rawConfig = [
        "translations" => []
    ];

    /**
     * @var $configValues ConfigParameter[] The ConfigParameter that the System should process
     */
    private $configValues = [Languages::class, Themes::class, RequestedSite::class, CustomerType::class];

    /**
     * Config constructor.
     */
    public function __construct()
    {
        // Iterate over all ConfigParameter for Config Values
        foreach ($this->configValues as $configValue) {
            /**@var $configValueInstance ConfigParameter */
            $configValueInstance = new $configValue(); //Create a new Instance

            $this->rawConfig[$configValue::getConfigName()] = $configValueInstance->getValue(); // Save the InstanceData to the rawConfig

            $configValueInstance->save(); // Save Values to Session
        }

        // Iterate over all ConfigParameter for Translations
        foreach ($this->configValues as $configValue) {
            $configValueInstance = new $configValue(); //Create a new Instance

            $valueTranslations = [];
            foreach ($configValueInstance->getConfigValues() as $value) {
                $valueTranslations += [
                    $value => $configValue::getTranslationForValue($value, $this->rawConfig[Languages::getConfigName()])
                ];
            }

            $this->rawConfig["translations"] += [
                $configValue::getConfigName() => [
                    "label" => $configValue::getTranslationForValue($configValue::getConfigName(), $this->rawConfig[Languages::getConfigName()]),
                    "values" => $valueTranslations
                ]
            ];
        }

        /**
         * Adding some Basic Information about the Website
         */
        $this->rawConfig += [
            "pageName" => "MedHub",
            "pageSlogan" => [
                "de" => "Einfacher Medikamente organisieren",
                "en" => "Easier Medicine management"
            ],
            "logoUrl" => "/web/img/logo.png",
            "projectMembers" => [
                "Nicolai Tosch",
                "Adriane Schütze",
                "Mauritzio Maggiorelli",
                "Marvin Sperber",
                "Tim Windelschmidt"
            ]
        ];
    }

    /**
     * @param $configParameter String The ConfigParameter Name
     * @return String The Config value
     */
    public function getConfigParameter($configParameter)
    {
        return $this->rawConfig[$configParameter];
    }
}