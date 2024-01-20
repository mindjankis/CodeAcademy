<?php
declare(strict_types=1);

namespace Mindaugas\TaskProject\Controllers;

use Mindaugas\TaskProject\Models\Task;
use Mindaugas\TaskProject\Repositories\TaskRepository;
use Smarty;
use DateTime;
use function PHPUnit\Framework\throwException;

class TaskController
{
    public function __construct(
        private TaskRepository $taskRepository,
        private Smarty $smarty
    ) {
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
            throw new \Exception('Data empty');
        }

        $currentDate = new DateTime();
        $formattedDate = $currentDate->format('Y-m-d');
        //dd($formattedDate);
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
        //      dump('asdf');
        //      dd($list);
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
        //dd($finalcheck);
        if(!$finalcheck){
            throw new \Exception('ID does not exits in database');
        }
        //dd($finalcheck);
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
        //dd($taskDataActive);
            if ($taskData===[]) {
            throw new \Exception('Data empty');
        }
        $currentDate = new DateTime();
        $formattedDate = $currentDate->format('Y-m-d');
        //dd($formattedDate);
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
