<?php

declare(strict_types=1);

namespace Mindaugas\TaskProject\Framework;

use Mindaugas\TaskProject\Controllers\TaskController;
use Mindaugas\TaskProject\Controllers\HomePageController;
use Mindaugas\TaskProject\Controllers\PageNotFoundController;

class Router
{
    public function __construct
    (
        private HomePageController $homePageController,
        private PageNotFoundController $pageNotFoundController,
        private TaskController $taskController
    )
    {
    }
    public function process(string $route, string $requestmethod, array $requestdata):void
    {

        switch ($route) {
            case '/':
                $this->homePageController->index();
                //dd('Home page');
                break;
            case '/list':
                $this->taskController->list();
                break;
            case '/car/store':
                $this->taskController->store($requestdata);
                break;
            case '/car/create':
                $this->taskController->create();
                break;
            default:
                $carNumber = $this->getCarNumberFromRout($route);
                if (null !== $carNumber) {
                    $this->taskController->details($carNumber);
                } else {
                    $this->pageNotFoundController->index();
                }
                break;
        }
    }

    private function getCarNumberFromRout(string $route): ?string
    {
            if (strpos($route, '/task/') !== false) {
                $result = str_replace('/task/', '', $route);
                if (!$result) {
                    $result = null;
                }
            } else {
                $result = null;
            }
        return $result;
    }
}