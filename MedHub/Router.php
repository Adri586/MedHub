<?php
/**
 * Created by IntelliJ IDEA.
 * User: fionera
 * Date: 22.06.17
 * Time: 22:25
 */

namespace MedHub;


use MedHub\Config\CustomerType;
use MedHub\Config\Languages;
use MedHub\Config\RequestedSite;

class Router
{

    public function render()
    {
        MedHub()->View()->assign("config", MedHub()->Config()->rawConfig);

        MedHub()->View()->render($this->getSitePath());
    }

    /**
     * @return string
     */
    protected function getSitePath()
    {
        /** @var Config $config */
        $config = MedHub()->Config()->rawConfig;

        $requestUrl = $config->getConfigParameter(RequestedSite::getConfigName());
        $language = $config->getConfigParameter(Languages::getConfigName());

        if ($config->getConfigParameter(CustomerType::getConfigName()) == CustomerType::NULL) {
            return $this->getRawPath("special", $language, "selectCustomerType");
        }

        $requestUrl = str_replace(".", "", $requestUrl);

        if (count(explode("/", $requestUrl)) > 1) {

            $siteArray = explode("/", $requestUrl);
            $site = $siteArray[count($siteArray) - 1];
            $path = implode("/", array_splice($siteArray, 0, count($siteArray)));

            $sitePath = $this->getRawPath($path, $language, $site);

        } else {
            $sitePath = $this->getRawPath($requestUrl, $language, $requestUrl);
        }

        return $sitePath;
    }

    public static function getRawPath($path, $language, $site)
    {
        return "./templates/" . $path . "/" . $language . "/" . $site . ".tpl";
    }
}