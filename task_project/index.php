<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';
use Mindaugas\TaskProject\Framework\DIContainer;
use \Mindaugas\TaskProject\Framework\Router;

//Load custom DI container
$container = new DIContainer();
$container->loadDependencies();

///** @var  \Monolog\Logger $logger */
//$logger=$container->get(\Monolog\Logger::class);
//$logger->warning('Hello world');

$request=str_replace('/Mokymai/CodeAcademy/task_project','',$_SERVER['REQUEST_URI']);
$requestmethod=$_SERVER['REQUEST_METHOD'];
//dd($route);

$router=$container->get(Router::class);
$router->process($request, $requestmethod, $_POST);



