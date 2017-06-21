<?php

use MedHub\Config;
use MedHub\Config\Languages;
use MedHub\UrlParse;

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
            $this->smarty->display(UrlParse::getSitePath($this->config));

        } catch (SmartyException $e) {
            $this->handleError($e);
        }

        var_dump($this->config->rawConfig);
    }

    private function handleError(SmartyException $e)
    {
        $this->smarty->display(UrlParse::getRawPath("errors", $this->config->getConfigParameter(Languages::getConfigName()), "404"));
    }
}

//Now following: Magic!
function autoload($classId)
{
    $classIdParts = explode("\\", $classId);
    $classIdLength = count($classIdParts);
    $className = $classIdParts[$classIdLength - 1];
    $namespace = $classIdParts[0];

    for ($i = 1; $i < $classIdLength - 1; $i++) {
        $namespace .= '/' . $classIdParts[$i];
    }

    if (file_exists(dirname(__FILE__))
        . '/' . $namespace
        . '/' . $className
        . '.class.php'
    ) {
        include $namespace . '/' . $className . '.php';
    }
}

spl_autoload_register('autoload');

new MedHub();