<?php

declare(strict_types=1);

namespace Mindaugas\DvidesimtsestaPaskaita\Framework;

use Mindaugas\DvidesimtsestaPaskaita\Controllers\HomePageController;

class Router
{


    public function __construct
    (
        private HomePageController $homePageController
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
                dd('Car list');
                // no break
            default:
                dd('Not found 404');
        }
    }
}
