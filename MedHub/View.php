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

    /** @var \Smarty $smarty */
    protected $smarty;

    /**
     * View constructor.
     */
    public function __construct()
    {
        $this->smarty = new Smarty();

        //$smarty->force_compile = true;
        $this->smarty->debugging = false;
        $this->smarty->caching = false;
        $this->smarty->cache_lifetime = 120;
    }

    public function assign(string $path, $var) {
        $this->smarty->assign($path, $var);
    }

    protected function handleError($error) {
        $this->smarty->display(Router::getRawPath("errors", MedHub()->Config()->getConfigParameter(Languages::getConfigName()), "404"));
    }

    public function render($sitePath) {
        try {
            $this->smarty->display($sitePath);

        } catch (SmartyException $e) {
            $this->handleError($e);
        }
    }
}