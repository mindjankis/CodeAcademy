<?php

declare(strict_types=1);

use Mindaugas\DvidesimtketvirtaPaskaita\App;
use Mindaugas\DvidesimtketvirtaPaskaita\Config\Container;

require_once 'vendor/autoload.php';

// Load custom DI container
$container = new Container();
$container->loadDependencies();

$app = $container->get(App::class);
$app->execute($argv);


