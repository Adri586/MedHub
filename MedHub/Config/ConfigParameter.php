<?php

namespace MedHub\Config;

abstract class ConfigParameter
{

    /**
     * @var $value mixed The Value
     */
    private $value;

    /**
     * ConfigParameter constructor.
     */
    public function __construct()
    {

        /**
         * If Post request, look in the parameter
         */
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST[$this->getConfigName()]) && $this->value == "") {
                foreach ($this->getConfigValues() as $availableValue) {
                    if ($_POST[$this->getConfigName()] === $availableValue) {
                        $this->value = $availableValue;
                    }
                }
            }
        }

        /**
         * If Request has Parameter use it
         */
        if (isset($_REQUEST[$this->getConfigName()]) && $this->value == "") {
            foreach ($this->getConfigValues() as $availableValue) {
                if ($_REQUEST[$this->getConfigName()] === $availableValue) {
                    $this->value = $availableValue;
                }
            }
        }

        /**
         * If Session has Parameter use it
         */
        if (isset($_SESSION[$this->getConfigName()]) && $this->value == "") {
            foreach ($this->getConfigValues() as $availableValue) {
                if ($_SESSION[$this->getConfigName()] === $availableValue) {
                    $this->value = $availableValue;
                }
            }
        }

        /**
         * If nothing has the Parameter, use default
         */
        if ($this->value == "") {
            $this->value = $this->getDefaultValue();
        }

        return $this->value;
    }

    public static abstract function getConfigName();

    public abstract function getDefaultValue();

    public abstract function getConfigValues();

    public abstract function getTranslationForValue($value, $lang);

    /**
     * @param $newValue mixed The new Value
     */
    public function setValue($newValue)
    {
        $this->value = $newValue;
    }

    /**
     * @return mixed The Value
     */
    public function getValue()
    {
        return $this->value;
    }


    /**
     * Save the Value to the Session
     */
    public function save()
    {
        $_SESSION[$this->getConfigName()] = $this->value;
    }
}