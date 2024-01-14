<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';
use Mindaugas\DvidesimtsestaPaskaita\Framework\DIContainer;

//Load custom DI container
$container = new DIContainer();
$container->loadDependencies();

/** @var  \Monolog\Logger $logger */
$logger=$container->get(\Monolog\Logger::class);
$logger->warning('Hello world');
//print_r($_SERVER['REQUEST_URI']);
//dd($_SERVER);

