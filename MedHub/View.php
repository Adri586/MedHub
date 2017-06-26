<?php
/**
 * Created by IntelliJ IDEA.
 * User: fionera
 * Date: 22.06.17
 * Time: 22:25
 */

namespace MedHub;

use MedHub\Config\Languages;
use Smarty;
use SmartyException;

class View
{

    /** @var \Smarty $smarty The Smarty Instance*/
    protected $smarty;

    /**
     * View constructor.
     */
    public function __construct()
    {
        $this->smarty = new Smarty(); // Create a new Smarty Instance

        //$smarty->force_compile = true;
        $this->smarty->debugging = false;
        $this->smarty->caching = false;
        $this->smarty->cache_lifetime = 120;
    }

    /**
     * Assign a Value to the Template at a specific Path
     * @param string $path Path for the Template Value.
     * @param mixed $var The Value that gets assigned to the Path
     */
    public function assign(string $path, $var) {
        $this->smarty->assign($path, $var);
    }

    protected function handleError($error) {
        $this->smarty->display(Router::getRawPath("errors", MedHub()->Config()->getConfigParameter(Languages::getConfigName()), "404"));
        http_response_code(404);
    }

    /**
     * Renders the Template
     * @param $sitePath String Path to the Template to render
     */
    public function render($sitePath) {
        try {
            $this->smarty->display($sitePath);

        } catch (SmartyException $e) {
            $this->handleError($e);
        }
    }
}