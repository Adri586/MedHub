<?php

namespace MedHub;

use MedHub\Config\Languages;
use MedHub\Config\RequestedSite;

class UrlParse
{
    /**
     * @param $config Config
     * @return mixed
     */
    public static function getSitePath($config)
    {
        $requestUrl = $config->getConfigParameter(RequestedSite::getConfigName());
        $language = $config->getConfigParameter(Languages::getConfigName());

        $requestUrl = str_replace(".", "", $requestUrl);

        if (count(explode("/", $requestUrl)) > 1) {

            $siteArray = explode("/", $requestUrl);
            $site = $siteArray[count($siteArray) - 1];
            $path = implode("/", array_splice($siteArray, 0, count($siteArray)));

            $sitePath = UrlParse::getRawPath($path, $language, $site);

        } else {
            $sitePath = UrlParse::getRawPath($requestUrl, $language, $requestUrl);
        }

        return $sitePath;
    }

    public static function getRawPath($path, $language, $site)
    {
        return "./templates/" . $path . "/" . $language . "/" . $site . ".tpl";
    }
}