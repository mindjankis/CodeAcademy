<?php

declare(strict_types=1);

namespace Mindaugas\DvidesimtsestaPaskaita\Framework;

class Router
{
    public function process(string $route):void
    {
        //dd($route);
        switch ($route) {
            case '/':
                dd('Home page');
                // no break
            case '/list':
                dd('Car list');
                // no break
            default:
                dd('Not found 404');
        }
    }
}
