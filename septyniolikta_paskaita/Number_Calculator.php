<?php

declare(strict_types=1);

/*
Sukurkite klasę NumberCalculator, kuri leistų atlikti įvairius skaičiavimo veiksmus. Ši klasė neturės konstruktoriaus.
Metodai:
- addNumber - metodas priims "int" tipo argumentą, return tipas bus "void"
- calculateSum - metodas grąžins "int" tipo reikšmę, argumentų neturės
- calculateProduct - product liet. sandauga. Metodas grąžins "int" tipo reikšmę, argumentų neturės
- calculateAverage - suapvalinkite iki sveiko skaičiaus, į viršų. Metodas grąžins "int" tipo reikšmę, argumentų neturės
Nepamirškite sudėti argumentų bei return tipų.
Kodo kvietimo pavyzdys:
$numberCalculator = new NumberCalculator();
echo $numberCalculator->calculateSum(); // 0
$numberCalculator->addNumber(5);
$numberCalculator->addNumber(7);
echo $numberCalculator->calculateSum(); // 12
*/
class NumberCalculator {
    Private array $number=[];


    public function addNumber(int $number): void
    {
        $this->number[]=$number;
    }

    public function calculateSum():int
    {
        return array_sum($this->number);
    }

    public function calculateSandauga():int
    {
        $result=1;
        foreach ($this->number as $value) {
            $result = $result * $value;
        }
           return $result;
    }

    public function calculateAverage():float
    {
        return round($this->calculateSum()/count($this->number),2);
    }
}

$obj=new NumberCalculator();
$obj->addNumber(1);
$obj->addNumber(2);
$obj->addNumber(3);
$obj->addNumber(4);
echo $obj->calculateSum(); echo PHP_EOL;
echo $obj->calculateSandauga(); echo PHP_EOL;
echo $obj->calculateAverage();

