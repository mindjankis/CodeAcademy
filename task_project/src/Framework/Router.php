<?php

declare(strict_types=1);

namespace Mindaugas\TaskProject\Framework;

use Mindaugas\TaskProject\Controllers\TaskController;
use Mindaugas\TaskProject\Controllers\HomePageController;
use Mindaugas\TaskProject\Controllers\PageNotFoundController;

class Router
{
    public function __construct(
        private HomePageController $homePageController,
        private PageNotFoundController $pageNotFoundController,
        private TaskController $taskController
    ) {
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
            case '/task/store':
                $this->taskController->store($requestdata);
                break;
            case '/task/create':
                $this->taskController->create();
                break;
            case '/task/getdeletedata':
                $this->taskController->getDeleteData();
                break;
            case '/task/delete':
                $this->taskController->delete($requestdata);
                break;
            default:
                $this->pageNotFoundController->index();
                break;
        }
    }
}
