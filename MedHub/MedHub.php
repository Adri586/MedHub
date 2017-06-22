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