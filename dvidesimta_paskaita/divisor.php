<?php

declare(strict_types=1);

class Divisor
{
    public function __construct(protected int $X)
    {

    }

    public function __invoke($div):array{
        if($div){}
        $array=[];
        $newarray=[];
        for ($i = 1; $i <= $this->X; $i++){
            $array[]=$i;
        }

        foreach ($array as $value){
        if (fmod($value,$div)==0){
            $newarray[]=$value;
        }
        }
        return $newarray;
    }

}
$divisor = new Divisor(100);
print_r($divisor(10));

/*
Sukurkite klasę, kuri masyvo formatu grąžintų visus skaičius nuo 1 iki X, kurie dalijasi iš tam tikro skaičiaus.
Klasė turi būti iškviečiama kaip funkcija, daliklis paduodamas kaip argumentas.
Skaičius X turi būti paduodamas per konstruktorių. Skaičius turi būti teigiamas.

$divisor = new Divisor(1000);
print_r($divisor(10));
[
    10,
    20,
    ...
]
*/