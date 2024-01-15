<?php

declare(strict_types=1);

namespace Mindaugas\DvidesimtsestaPaskaita\Framework;

use Mindaugas\DvidesimtsestaPaskaita\Controllers\CarController;
use Mindaugas\DvidesimtsestaPaskaita\Controllers\HomePageController;
use Mindaugas\DvidesimtsestaPaskaita\Controllers\PageNotFoundController;

class Router
{


    public function __construct
    (
        private HomePageController $homePageController,
        private PageNotFoundController $pageNotFoundController,
        private CarController $carController
    )
    {
    }
    public function process(string $route, string $requestmethod, array $requestdata):void
    {
        //dd($route);
        switch ($route) {
            case '/':
                $this->homePageController->index();
                //dd('Home page');
                break;
            case '/list':
                $this->carController->list();
                break;
            default:
                $this->pageNotFoundController->index();
                //dd('Not found 404');
                break;
        }
    }
}
