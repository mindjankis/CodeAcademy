<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';
use Mindaugas\DvidesimtsestaPaskaita\Framework\DIContainer;
use \Mindaugas\DvidesimtsestaPaskaita\Framework\Router;

//Load custom DI container
$container = new DIContainer();
$container->loadDependencies();

///** @var  \Monolog\Logger $logger */
//$logger=$container->get(\Monolog\Logger::class);
//$logger->warning('Hello world');

$request=str_replace('/Mokymai/CodeAcademy/dvidesimtsesta_paskaita','',$_SERVER['REQUEST_URI']);
$requestmethod=$_SERVER['REQUEST_METHOD'];
//dd($route);

$router=$container->get(Router::class);
$router->process($request, $requestmethod, $_GET);

//dd($_SERVER['REQUEST_URI']);
