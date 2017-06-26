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

/**
 * Parses the Request and initiates the Rendering
 * Class Router
 * @package MedHub
 */
class Router
{

    /**
     * Render the requested Site
     */
    public function render()
    {
        MedHub()->View()->assign("config", MedHub()->Config()->rawConfig);

        MedHub()->View()->render($this->getSitePath());
    }

    /**
     * @return string The Path of the Template for the Requested Site
     */
    protected function getSitePath()
    {
        /** @var Config $config */
        $config = MedHub()->Config();

        $requestUrl = $config->getConfigParameter(RequestedSite::getConfigName());
        $language = $config->getConfigParameter(Languages::getConfigName());

        if ($config->getConfigParameter(CustomerType::getConfigName()) == CustomerType::NULL && $requestUrl != "impressum") {
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

    /**
     * @param $path string Basefolder
     * @param $language string Language
     * @param $site String Template Name
     * @return string Path of the Site
     */
    public static function getRawPath($path, $language, $site)
    {
        return "./templates/" . $path . "/" . $language . "/" . $site . ".tpl";
    }
}