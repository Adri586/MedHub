<?php
/**
 * Created by IntelliJ IDEA.
 * User: fionera
 * Date: 22.06.17
 * Time: 22:24
 */

namespace MedHub;

/**
 * The Main Instance of the Website
 * Class MedHub
 * @package MedHub
 */
class MedHub
{
    /**
     * @var View $view The View instance
     */
    protected $view;

    /**
     * @var Config $config The Config instance
     */
    protected $config;

    /**
     * @var Router $router The Router instance
     */
    protected $router;

    /**
     * MedHub constructor.
     * It starts the Session and creates the Instances.
     */
    public function __construct()
    {
        session_start();

        $this->config = new Config();
        $this->view = new View();
        $this->router = new Router();
    }

    /**
     * @return View Returns the View Instance of MedHub
     */
    public function View() {
        return $this->view;
    }

    /**
     * @return Config Returns the Config Instance of MedHub
     */
    public function Config() {
        return $this->config;
    }

    /**
     * @return Router Returns the Router Instance of MedHub
     */
    public function Router() {
        return $this->router;
    }

}