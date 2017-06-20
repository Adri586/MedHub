<?php

/**
 * Created by IntelliJ IDEA.
 * User: fionera
 * Date: 20.06.17
 * Time: 11:26
 */

include("vendor/smarty/Smarty.class.php");

class MedHub
{
    public $smarty;
    public $config;

    /**
     * MedHub constructor.
     */
    public function __construct()
    {
        session_start();

        $this->smarty = new Smarty();
        $this->config = new Config();

        //$smarty->force_compile = true;
        $this->smarty->debugging = false;
        $this->smarty->caching = false;
        $this->smarty->cache_lifetime = 120;

//        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//            $this->postHandler();
//        }

        $this->smarty->assign("config", $this->config->rawConfig);

        try {
            $this->smarty->display($this->getSitePath($this->config->getConfigParameter(RequestedSite::getConfigName()), $this->config->getConfigParameter(Languages::getConfigName())));
        } catch (SmartyException $e) {
            $this->handleError($e);
        }
    }

    private function getRealSitePath($folder, $siteName, $lang)
    {

        $sitePath = "./templates/" . $folder . "/" . $lang . "/" . $siteName . ".tpl";

        return $sitePath;
    }

    private function getSitePath($siteName, $lang)
    {
        return $this->getRealSitePath($siteName, $siteName, $lang);
    }

    private function handleError(SmartyException $e)
    {

        $this->smarty->display($this->getRealSitePath("errors", "404", $this->config->getConfigParameter(Languages::getConfigName())));
    }
}

abstract class ConfigParameter
{

    private $value;

    /**
     * ConfigParameter constructor.
     */
    public function __construct()
    {
        if (isset($_REQUEST[$this->getConfigName()]) && $this->value == "") {
            foreach ($this->getConfigValues() as $availableValue) {
                if ($_REQUEST[$this->getConfigName()] === $availableValue) {
                    $this->value = $availableValue;
                }
            }
        }

        if (isset($_SESSION[$this->getConfigName()]) && $this->value == "") {
            foreach ($this->getConfigValues() as $availableValue) {
                if ($_SESSION[$this->getConfigName()] === $availableValue) {
                    $this->value = $availableValue;
                }
            }
        }

        if ($this->value == "") {
            $this->value = $this->getDefaultValue();
        }

        return $this->value;
    }

    public static abstract function getConfigName();

    public abstract function getDefaultValue();

    public abstract function getConfigValues();

    public function setValue($newValue)
    {
        $this->value = $newValue;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function save()
    {
        $_SESSION[$this->getConfigName()] = $this->value;
    }
}

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
}

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

class RequestedSite extends ConfigParameter
{
    public $value = "";

    public function __construct()
    {
        parent::__construct();

        if (isset($_REQUEST[$this->getConfigName()])) {
            $this->value = $_REQUEST[$this->getConfigName()];
        } else {
            $this->value = $this->getDefaultValue();
        }

    }

    public function setValue($newValue)
    {
        //Nothing
    }

    public function getValue()
    {
        return $this->value;
    }

    public function save()
    {
        //Nothing
    }

    public static function getConfigName()
    {
        return "requestedSite";
    }

    public function getDefaultValue()
    {
        return "index";
    }

    public function getConfigValues()
    {
        return [];
    }


}

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

new MedHub();