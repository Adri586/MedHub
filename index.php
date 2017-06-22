<?php

require_once 'vendor/smarty/Autoloader.php';
use MedHub\MedHub;

/**
 * Returns application instance
 *
 * @param MedHub $newInstance
 *
 * @return MedHub
 */
function MedHub($newInstance = null)
{
    static $instance;

    if (isset($newInstance)) {
        $oldInstance = $instance;
        $instance = $newInstance;

        return $oldInstance;
    } elseif (!isset($instance)) {
        die("An error occurred");
    }

    return $instance;
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
Smarty_Autoloader::register();

MedHub(new MedHub());

MedHub()->Router()->render();