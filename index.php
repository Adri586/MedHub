<?php

use MedHub\Config;
use MedHub\Config\Languages;
use MedHub\Config\RequestedSite;

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

        $siteName = str_replace(".", "", $siteName);

        $sitePath = "./templates/" . $folder . "/" . $lang . "/" . $siteName . ".tpl";

        return $sitePath;
    }

    private function getSitePath($siteName, $lang)
    {
        if (count(explode("/", $siteName)) > 1) {

            $siteArray = explode("/", $siteName);
            $site = $siteArray[count($siteArray) - 1];
            $path = implode("/", array_splice($siteArray, 0,  count($siteArray)));

            return $this->getRealSitePath($path, $site, $lang);
        }

        return $this->getRealSitePath($siteName, $siteName, $lang);
    }

    private function handleError(SmartyException $e)
    {

        $this->smarty->display($this->getRealSitePath("errors", "404", $this->config->getConfigParameter(Languages::getConfigName())));
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