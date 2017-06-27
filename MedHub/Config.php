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
    public $rawConfig = [];

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

            $this->rawConfig[$configValueInstance->getConfigName()] = $configValueInstance->getValue(); // Save the InstanceData to the rawConfig

            $configValueInstance->save(); // Save Values to Session
        }

        // Iterate over all ConfigParameter for Translations
        foreach ($this->configValues as $configValue) {
            /**@var $configValueInstance ConfigParameter */
            $configValueInstance = new $configValue(); //Create a new Instance

            $this->rawConfig["translation"] += [
                $configValueInstance->getConfigName() => $configValueInstance->getTranslationForValue($configValueInstance->getValue(), $this->rawConfig[Languages::getConfigName()])
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