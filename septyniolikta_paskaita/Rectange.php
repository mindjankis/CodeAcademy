<?php

declare(strict_types=1);

/*
Sukurkite klasę, kuri skaičiuotų keturkampio plotą, perimetrą ir įstrižainę.
Klasės pavadinimas: Rectangle
Į konstruktorių paduodama: int $length, int $width
Metodai:
- calculateArea()
- calculatePerimeter()
- calculateDiagonal()
Metodai turi grąžinti iki 2 skaitmenų po kablelio į viršų suapvalintą float tipo reikšmę. Pridėkite return tipą metodams.
*/

class Rectangle {

    public function __construct(private int $length, private int $width) {

    }

    public function calculateArea(): float {
        return round(($this->length * $this->width),2);
    }

    public function calculatePerimeter():float {
        return round (2 * ($this->length + $this->width), 2);
    }

    public function calculateDiagonal(): float {
        $temp=pow($this->length,2)+pow($this->width,2);
        return round(sqrt($temp),2);
    }
//    public function calculatePerimeter(): float {
//        return round (2 * ($this->length + $this->width), 2);
//    }
//    public function calculateDiagonal(): float {
//        return round(2 ** ($this->length + $this->width), 2);
//    }
}

$obj = new Rectangle(5, 7);
echo $obj->calculateArea(); echo PHP_EOL;
echo $obj->calculatePerimeter(); echo PHP_EOL;
echo $obj->calculateDiagonal();


