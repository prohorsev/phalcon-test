<?php
declare(strict_types=1);

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $this->assets->addCss('css/style.css');
        $this->assets->addJs('js/script.js');
    }
}
