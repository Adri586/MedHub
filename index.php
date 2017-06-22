<?php

use MedHub\MedHub;

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

require_once 'vendor/smarty/Autoloader.php';
Smarty_Autoloader::register();

spl_autoload_register('autoload');

$medHub = new MedHub();

$medHub->Router()->render();