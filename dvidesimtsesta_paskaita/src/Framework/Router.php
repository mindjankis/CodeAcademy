<?php

declare(strict_types=1);

namespace Mindaugas\DvidesimtsestaPaskaita\Framework;

use Mindaugas\DvidesimtsestaPaskaita\Controllers\TaskController;
use Mindaugas\DvidesimtsestaPaskaita\Controllers\HomePageController;
use Mindaugas\DvidesimtsestaPaskaita\Controllers\PageNotFoundController;

class Router
{


    public function __construct
    (
        private HomePageController $homePageController,
        private PageNotFoundController $pageNotFoundController,
        private TaskController $carController
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
            case '/car/store':
                $this->carController->store($requestdata);
                break;
            case '/car/create':
                $this->carController->create();
                break;
            default:
                $carNumber = $this->getCarNumberFromRout($route);
                if (null !== $carNumber) {
                    $this->carController->details($carNumber);
                } else {
                    $this->pageNotFoundController->index();
                }
                break;
        }
    }

    private function getCarNumberFromRout(string $route): ?string
    {
            if (strpos($route, '/car/') !== false) {
                $result = str_replace('/car/', '', $route);
                if (!$result) {
                    $result = null;
                }
            } else {
                $result = null;
            }
        return $result;
    }
}