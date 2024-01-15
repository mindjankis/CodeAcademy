<?php
declare(strict_types=1);

namespace Mindaugas\DvidesimtsestaPaskaita\Controllers;

use Mindaugas\DvidesimtsestaPaskaita\Repositories\CarRepository;

class CarController
{
    public function __construct(private CarRepository $carRepository)
    {
    }
    public function list()
    {
    $list=$this->carRepository->getlist();
    dd($list);

    }

    public function details()
    {

    }
}