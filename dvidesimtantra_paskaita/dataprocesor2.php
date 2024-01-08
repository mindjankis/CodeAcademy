<?php

declare(strict_types=1);

interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}
$result= new Circle(5);
$shape=$result;
$area=$shape->calculateArea();
echo $area;

