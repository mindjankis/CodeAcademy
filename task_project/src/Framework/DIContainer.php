<?php
declare(strict_types=1);
namespace Mindaugas\TaskProject\Framework;

use Mindaugas\TaskProject\Controllers\TaskController;
use Mindaugas\TaskProject\Controllers\HomePageController;
use Mindaugas\TaskProject\Controllers\PageNotFoundController;
use Mindaugas\TaskProject\Models\Task;
use Mindaugas\TaskProject\Repositories\TaskRepository;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use RuntimeException;
use Smarty;

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
                $logger = new Logger('task_project_app');
                $logger->pushHandler(new StreamHandler('.\src\Public\task_project.log', Level::Warning));
                return $logger;
            }
        );

        $this->set(
            Router::class,
            function (DIContainer $container) {
                return new Router(
                    $this->get(HomePageController::class),
                    $this->get(PageNotFoundController::class),
                    $this->get(TaskController::class));

            }
        );

        $this->set(
            HomePageController::class,
            function (DIContainer $container) {
                return new HomePageController();
            }
        );

        $this->set(
            PageNotFoundController::class,
            function (DIContainer $container) {
                return new PageNotFoundController();
            }
        );

        $this->set(
            DbConnection::class,
            function (DIContainer $container) {
                $instance=DbConnection::getInstance();
                return $instance->getConnection();
            }
        );

        $this->set(
            TaskController::class,
            function (DIContainer $container) {
                return new TaskController(
                    $this->get(TaskRepository::class),
                    $this->get(Smarty::class)
                );
            }
        );

        $this->set(
            TaskRepository::class,
            function (DIContainer $container) {
                return new TaskRepository($this->get(DbConnection::class));
            }
        );
        $this->set(
            Smarty::class,
            function (DIContainer $container) {
                return new Smarty();
            }
        );
    }
}
