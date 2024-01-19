<?php
declare(strict_types=1);

namespace Mindaugas\TaskProject\Controllers;

use Mindaugas\TaskProject\Models\Task;
use Mindaugas\TaskProject\Repositories\TaskRepository;
use Smarty;
Use DateTime;

class TaskController
{
    public function __construct(
        private TaskRepository $taskRepository,
        private Smarty $smarty)
    {
    }
    public function list()
    {
    $list=$this->taskRepository->getlist();
    $this->smarty->assign('list',$list);
    $this->smarty->display('./src/views/tasklist.tpl');

    }
//
//    public function details(string $carRegistrationNumber)
//    {
//
//        $car = $this->carRepository->findCarByRegistrationNumber($carRegistrationNumber);
//        if ($car!==null){
//            $this->smarty->assign('car',$car);
//            $this->smarty->display('./src/views/uniquecar.tpl');
//        }
//        else{dump(sprintf('Car with registration number %s is not found',$carRegistrationNumber));}
//    }
//
    public function store(array $taskData)
    {
        // Validation
        //dd($taskData);
           if ($taskData===[]) {
            throw new \Exception('Data empty');
        }
        //dd($taskData);
        $currentDate = new DateTime();
        $formattedDate = $currentDate->format('Y-m-d');
        //dd($formattedDate);
        $task = new Task(
            (int) null,
            (string) $taskData['CREATED_AT'],
            $formattedDate,
            (string) $taskData['NAME'],
            (string) $taskData['DESCRIPTION'],
            (string) $taskData['STATUS'],
            (string) $taskData['ACTIVE']
        );
           //dd($task);
//
        $this->taskRepository->createTask($task);
//
        header('Location: /Mokymai/CodeAcademy/task_project/list');
    }
//
    public function create()
    {
        $this->smarty->display('./src/Views/TaskCreateForm.tpl');
    }
}