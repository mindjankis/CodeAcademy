<?php
declare(strict_types=1);

namespace Mindaugas\DvidesimtsestaPaskaita\Controllers;

use Mindaugas\DvidesimtsestaPaskaita\Models\Car;
use Mindaugas\DvidesimtsestaPaskaita\Repositories\CarRepository;
use Smarty;

class CarController
{
    public function __construct(
        private CarRepository $carRepository,
        private Smarty $smarty)
    {
    }
    public function list()
    {
    $list=$this->carRepository->getlist();
    $this->smarty->assign('list',$list);
    $this->smarty->display('./src/views/carlist.tpl');

    }

    public function details(string $carRegistrationNumber)
    {

        $car = $this->carRepository->findCarByRegistrationNumber($carRegistrationNumber);
        if ($car!==null){
            $this->smarty->assign('car',$car);
            $this->smarty->display('./src/views/uniquecar.tpl');
        }
        else{dump(sprintf('Car with registration number %s is not found',$carRegistrationNumber));}
    }

    public function store(array $carData)
    {
        // Validation
        if (!$carData) {
            throw new \Exception('Data empty');
        }
        $car = new Car(
            (string) $carData['registrationId'],
            (string) $carData['manufacturer'],
            (string) $carData['model'],
            (int) $carData['year'],
        );

        $this->carRepository->createCar($car);

        header('Location: /Mokymai/CodeAcademy/dvidesimtsesta_paskaita/list');
    }

    public function create()
    {
        $this->smarty->display('./src/Views/CarCreateForm.tpl');
    }
}