<?php

namespace MedHub\Config;

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