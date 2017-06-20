<?php

namespace MedHub;

use MedHub\Config\ConfigParameter;
use MedHub\Config\Languages;
use MedHub\Config\RequestedSite;
use MedHub\Config\Themes;

class Config
{

    public $rawConfig = [];

    /**
     * @var $configValues ConfigParameter[]
     */
    private $configValues = [Languages::class, Themes::class, RequestedSite::class];

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