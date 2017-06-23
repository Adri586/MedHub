<?php

namespace MedHub;

use MedHub\Config\ConfigParameter;
use MedHub\Config\CustomerType;
use MedHub\Config\Languages;
use MedHub\Config\RequestedSite;
use MedHub\Config\Themes;

class Config
{

    public $rawConfig = [];

    /**
     * @var $configValues ConfigParameter[]
     */
    private $configValues = [Languages::class, Themes::class, RequestedSite::class, CustomerType::class];

    /**
     * Config constructor.
     */
    public function __construct()
    {
        foreach ($this->configValues as $configValue) {
            /**@var $configValueInstance ConfigParameter */
            $configValueInstance = new $configValue();

            $this->rawConfig[$configValueInstance->getConfigName()] = $configValueInstance->getValue();

            $configValueInstance->save();
        }

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
     * @param $configParameter String
     * @return String
     */
    public function getConfigParameter($configParameter)
    {
        return $this->rawConfig[$configParameter];
    }
}