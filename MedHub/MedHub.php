<?php
/**
 * Created by IntelliJ IDEA.
 * User: fionera
 * Date: 22.06.17
 * Time: 22:24
 */

namespace MedHub;

class MedHub
{
    protected $view;

    protected $config;

    protected $router;

    /**
     * MedHub constructor.
     */
    public function __construct()
    {
        session_start();

        $this->config = new Config();
        $this->view = new View();
        $this->router = new Router();

        var_dump($this->config->rawConfig);

    }

    public function View() {
        return $this->view;
    }

    public function Config() {
        return $this->config;
    }


    public function Router() {
        return $this->router;
    }

}