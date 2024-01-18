<?php
declare(strict_types=1);

namespace Mindaugas\TaskProject\Controllers;

use Mindaugas\TaskProject\Models\Task;
use Mindaugas\TaskProject\Repositories\TaskRepository;
use Smarty;

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
//    public function store(array $carData)
//    {
//        // Validation
//        if (!$carData) {
//            throw new \Exception('Data empty');
//        }
//        $car = new Car(
//            (string) $carData['registrationId'],
//            (string) $carData['manufacturer'],
//            (string) $carData['model'],
//            (int) $carData['year'],
//        );
//
//        $this->carRepository->createCar($car);
//
//        header('Location: /Mokymai/CodeAcademy/dvidesimtsesta_paskaita/list');
//    }
//
//    public function create()
//    {
//        $this->smarty->display('./src/Views/CarCreateForm.tpl');
//    }
}