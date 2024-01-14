<?php
declare(strict_types=1);
namespace Mindaugas\DvidesimtsestaPaskaita\Framework;

use Mindaugas\DvidesimtsestaPaskaita\Controllers\HomePageController;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use RuntimeException;

class DIContainer
{
    private array $entries = [];

    public function get(string $id)
    {
        if (!$this->has($id)) {
            throw new RuntimeException('Class ' . $id . 'not found in container.');
        }
        $entry = $this->entries[$id];

        return $entry($this);
    }

    public function has(string $id): bool
    {
        return isset($this->entries[$id]);
    }

    public function set(string $id, callable $callable): void
    {
        $this->entries[$id] = $callable;
    }


    public function loadDependencies()
    {
        $this->set(
            Logger::class,
            function (DIContainer $container) {
                $logger = new Logger('car_project_app');
                $logger->pushHandler(new StreamHandler('.\src\Public\car_project.log', Level::Warning));
                return $logger;
            }
        );

        $this->set(
            Router::class,
            function (DIContainer $container) {
                return new Router($this->get(HomePageController::class));
            }
        );

        $this->set(
            HomePageController::class,
            function (DIContainer $container) {
                return new HomePageController();
            }
        );
    }
}
