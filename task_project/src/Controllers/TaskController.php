<?php
declare(strict_types=1);

namespace Mindaugas\TaskProject\Controllers;

use Mindaugas\TaskProject\Models\Task;
use Mindaugas\TaskProject\Repositories\TaskRepository;
use Psr\Log\LoggerInterface;
use Smarty;
use DateTime;
use Exception;
use Logger;

class TaskController
{
    public function __construct(
        private TaskRepository $taskRepository,
        private Smarty $smarty,
        private LoggerInterface $logger
    )
    {
    }
    public function list()
    {
        $list=$this->taskRepository->getlist();
        $this->smarty->assign('list', $list);
        $this->smarty->display('./src/views/tasklist.tpl');

    }
    public function store(array $taskData)
    {
        // Validation
        $taskDataName=strval($taskData['NAME']);
        $taskDataDescription=strval($taskData['DESCRIPTION']);
        if ($taskData===[]) {
            throw new Exception('Data empty');
        }

        $currentDate = new DateTime();
        $formattedDate = $currentDate->format('Y-m-d');
        $task = new Task(
            (int) null,
            (string) $taskData['CREATED_AT'],
            $formattedDate,
            $taskDataName,
            $taskDataDescription,
            (string) $taskData['STATUS'],
            true
        );

        $this->taskRepository->createTask($task);

        header('Location: /Mokymai/CodeAcademy/task_project/list');
    }
    public function create()
    {
        $this->smarty->display('./src/Views/TaskCreateForm.tpl');
    }

    public function getDeleteData()
    {
        $list=$this->taskRepository->getlist();
        $this->smarty->assign('list', $list);
        $this->smarty->display('./src/Views/tasklist.tpl');

    }

    public function delete(array $taskData)
    {
        $this->taskRepository->deleteTask($taskData);
        header('Location: /Mokymai/CodeAcademy/task_project/list');

    }

    public function getupdatedata()
    {
        $this->smarty->display('./src/Views/TaskUpdateForm.tpl');
    }

    public function update(array $taskData)
    {
        $idIntVal=intval($taskData['ID']);
        $finalcheck=$this->taskRepository->check($idIntVal);
        if(!$finalcheck){
            $this->logger->warning('ID does not exits in database');
            throw new Exception('ID does not exits in database');
        }
        $taskDataName=strval($taskData['NAME']);
        $taskDataDescription=strval($taskData['DESCRIPTION']);
        if($taskData['ACTIVE']=='false'){
            $taskDataActive=0;
            $taskDataActive=boolval($taskDataActive);
        }
        else{
            $taskDataActive=1;
            $taskDataActive=boolval($taskDataActive);
        }
            if ($taskData===[]) {
            throw new Exception('Data empty');
        }
        $currentDate = new DateTime();
        $formattedDate = $currentDate->format('Y-m-d');
        $task = new Task(
            (int) $taskData['ID'],
            (string) $taskData['CREATED_AT'],
            $formattedDate,
            $taskDataName,
            $taskDataDescription,
            (string) $taskData['STATUS'],
            $taskDataActive
        );
       $this->taskRepository->updateTask($task);
       header('Location: /Mokymai/CodeAcademy/task_project/list');

    }
}
