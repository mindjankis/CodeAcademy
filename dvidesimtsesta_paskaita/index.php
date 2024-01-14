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

$router=$container->get(Router::class);
$router->process();

dd($_SERVER['REQUEST_URI']);

