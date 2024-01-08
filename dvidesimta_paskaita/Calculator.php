<?php

declare(strict_types=1);

class Calculator {

    private int $iterations;
    private string $methodName1;
    private float $result;


    public function sum(int $a, int $b):int{
        return $a+$b;
    }

    public function subtract(int $a, int $b):int{
        return $a-$b;
    }
    public function multiply(int $a, int $b):int{
        return $a*$b;
    }

    public function divide(int $a, int $b):int{
        if ($b!=0) {
            return $a / $b;
        }
        else {throw new Error('Division by zero then generating random numbers');}
    }

    public function __call(string $name, array $arguments):void
    {
        if(!str_ends_with($name,'Timer')){
            throw new Error('Method does not end with timer');
        }
            $this->methodName1 = str_replace('Timer', '', $name); // Sum
        if(!method_exists(self::class,$this->methodName1)){
            throw new Error('Unkown method');
        }
        $this->iterations = (isset($arguments[0])) ? $arguments[0] : 0; // 5000
        $start=microtime(true);
        for ($i=1; $i>=$this->iterations; $i++) {
            $temp=$this->methodName(random_int(1, 10),random_int(1, 10));
        }
        $end=microtime(true);
        $this->result=($end-$start)*1000000;
    }

    public function Chronometras():void
    {
        echo 'It took '.$this->result.' to do '.$this->iterations.' '.$this->methodName1.'() operations';
    }
}

$calc = new Calculator();
//echo $calc->sum(1, 4).PHP_EOL; // grąžina 5
//echo $calc->subtract(10, 1).PHP_EOL; // grąžina 9
echo $calc->divideTimer(5000);
$funcname='Chronometras';
$calc->$funcname();

/*
1.0 - pasiruošimas
Klasei pridėkite veikiančius metodus sum($a, $b), subtract($a, $b)
Dirbama su sveikaisiais skaičiais (int)

Panaudojimo pavyzdys:
$calc = new Calculator();
$calc->sum(1, 4); // grąžina 5
$calc->subtract(10, 1); // grąžina 9

1.1
Užduotį atlikti per magišką metodą, kuris paminėtas paskaitos skaidrėse.

Norime, kad klasė skaičiuotų bet savo metodų vykdymo trukmę, N kartų kviečiant ją su atsitiktinėmis reikšmėmis.
Chronometras kviečiamas per funkciją pavadinimu "<operacija>Timer" perduodant įvykdymų kiekį:

$calc->sumTimer(5000); // 5000 kartų kviečiamas sum() metodas su atsitiktinėmis reikšmėmis
$calc->subtractTimer(1_000_000); // milijoną kartų kviečiamas subtract() metodas su atsitiktinėmis reikšmėmis

Chronometras per echo() išveda:
'It took 0.017563104629517 to do 5000 sum() operations'

- Paskaitos skaidrėse rasite magišką metodą, kuris leis jums atlikti užduotį
- atsitiktines reikšmės generuojame su rand() arba random_int()
- Laikas skaičiuojamas su microtime(true) pagalba
- Kintamo metodo kvietimas turint string (Example #2): https://www.php.net/manual/en/functions.variable-functions.php

1.2
Magiškojo metodo apdorojimas:
- jeigu kviečiamas metodas nesibaigia su Timer(), mesti klaidą
  str_ends_with()
  throw new Error('Unknown method');

  Pvz $calc->sumTimerr()
- jeigu kviečiamas chronometras neegzistuojančiai bazinei funkcijai, irgi mesti klaidą
  method_exists()

  Pvz $calc->summTimer();

1.3
Klasei pridėkite metodą multiply() (daugyba), išbandykite $calc->multiplyTimer(1_000_000);
Galite pridėti ir divide(), tačiau turite apsisaugoti nuo dalybos iš nulio

---------

Kadangi klasė neturi vidinės būsenos, objektų naudojimas neprivalomas.
Užduotį galima atlikti ir su statiniais metodais (funkcijomis).
Tokiu atveju naudojamas kitas magiškas metodas.

*/
