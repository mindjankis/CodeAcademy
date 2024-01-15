<?php
declare(strict_types=1);

namespace Mindaugas\DvidesimtsestaPaskaita\Controllers;

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

    public function details()
    {

    }
}