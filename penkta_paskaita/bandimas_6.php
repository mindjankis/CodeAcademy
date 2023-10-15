<?php
declare (strict_types=1);

//function exercise1(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = [0, 1, 2, 3, 4];
//
//    return 0;
//}

//function exercise1(int $key): int {
//    $numbers = [0, 1, 2, 3, 4];
//    $keyvalue = $numbers[$key];
//    return $keyvalue;
//}
//
//echo exercise1(4);



//function exercise2(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
//
//    return 0;
//}
//
//function exercise2(string $key): int{
//    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
//    $keyvalue = $numbers[$key];
//    return $keyvalue;
//}
//
//echo exercise2('two');


//function exercise3(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = [
//        [0, 1],
//        [1, 0, 2],
//        [
//            0,
//            [
//                0, 1, 99
//            ],
//        ],
//    ];
//
//    return 0;
//}
//function exercise3 (int $key1, int $key2, int $key3): ?int{
//    $numbers = [
//        [0, 1],
//        [1, 0, 2],
//        [
//            0,
//            [
//                0, 1, 99
//            ],
//        ],
//    ];
//    $keyvalue = $numbers[$key1][$key2][$key3];
//    return $keyvalue;
//}
//
//echo exercise3(2,1,2);

//var_dump($numbers[2][1][2]);

//function exercise4(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = [
//        'first' => [0, 1],
//        'third' => [1, 0, 2],
//        'fourth' => [
//            'value_1' => 0,
//            'value_2' => [
//                'zero' => 0, 'one' => 1, 'ninetynine' => 99
//            ],
//        ],
//    ];
//
//    return 0;
//}
//function exercise4 (string $key1, string $key2, string $key3): int{
//    $numbers = [
//        'first' => [0, 1],
//        'third' => [1, 0, 2],
//        'fourth' => [
//            'value_1' => 0,
//            'value_2' => [
//                'zero' => 0, 'one' => 1, 'ninetynine' => 99
//            ],
//        ],
//    ];
//$keyvalue = $numbers[$key1][$key2][$key3];
//return $keyvalue;
//}
//
//echo exercise4('fourth','value_2','ninetynine');
//
//function exercise5(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = [
//        'first' => [0, 1],
//        'third' => [1, 0, 2],
//        'fourth' => [
//            'value_1' => 0,
//            'value_6' => [
//                'zero' => 0, 'one' => 1, 99
//            ],
//        ],
//    ];
//
//    return 0;
//}
//function exercise5 (string $key1, string $key2, string $key3): int
//{
//    $numbers = [
//        'first' => [0, 1],
//        'third' => [1, 0, 2],
//        'fourth' => [
//            'value_1' => 0,
//            'value_6' => [
//                'zero' => 0, 'one' => 1, 99
//            ],
//        ],
//    ];
//    $keyvalue = $numbers[$key1][$key2][$key3];
//    return $keyvalue;
//}
//echo exercise5('fourth','value_6','0');


//function exercise6(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = [
//        'first' => [0, 1],
//        'third' => [1, 0, 2],
//        'fourth' => [
//            'value_1' => 0,
//            'value_6' => [
//                5 => 0, 'one' => 1, 99
//            ],
//        ],
//    ];
//
//    return 0;
//}
//function exercise6 (string $key1, string $key2, string $key3): int
//{
//    $numbers = [
//        'first' => [0, 1],
//        'third' => [1, 0, 2],
//        'fourth' => [
//            'value_1' => 0,
//            'value_6' => [
//                5 => 0, 'one' => 1, 99
//            ],
//        ],
//    ];
//    $keyvalue = $numbers[$key1][$key2][$key3];
//    return $keyvalue;
//}
//echo exercise6('fourth','value_6','6');

//function exercise7(): array
//{
//    /*
//    Sunaikinkitę reikšmę 2 ir grąžinkite masyvą
//    Turėtumėte gauti masyvą: ['zero' => 0, 'one' => 1, 'three' => 3, 'four' => 4]
//    */
//
//    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
//
//    return [];
//}
//function exercise7(array $array, string $keyToRemove):array
//{
//    if (array_key_exists($keyToRemove, $array)) {
//        unset($array[$keyToRemove]);
//    }
//    return $array;
//}
//
//$numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
//
//$numbers = exercise7($numbers, 'two');
//
//print_r($numbers);



//function exercise8(): array
//{
//    /*
//    Sunaikinkitę visas reikšmes, kurios dalijasi 2 ir grąžinkite masyvą
//    Turėtumėte gauti masyvą: ['one' => 1, 'three' => 3, 'five' => 5]
//    */
//
//    $numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
//
//    return [];
//}
//function exercise8 (array $array):array
//{
//    foreach ($array as $key => $value) {
//        if ($value%2===0){
//            unset($array[$key]);
//        }
//    }
//    return $array;
//}
//
//$numbers = ['nineteen' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
//
//$numbers = exercise8 ($numbers);
//
//print_r($numbers);

//function exercise9(int $start, int $end): void
//{
//    /*
//    Išspausdinkite skaičius nuo $start iki $end pasinaudodami ciklu.
//    Jeigu $start yra mažiau nei $end, funkcija nieko nespausdina.
//    */
//
//}
//
//function exercise9(int $start, int $end): void {
//    if($start>$end) {
//        for ($i = $start; $i >= $end; $i--) {
//            echo $i.PHP_EOL;
//        }
//    }
//    else {echo 'Start maziau uz End';}
//}
//
//echo exercise9(0,10);

//function exercise10(int $number): void
//{
//    /*
//    Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 3. Jeigu paduotas skaičius mažesnis nei 0,
//    funkcija nieko nespausdina.
//    Funkcijos kvietimas: exercise10(60)
//    Funkcija spausdina:
//    3
//    6
//    9
//    12
//    ...
//    60
//    */
//}
//function exercise10(int $number): void
//{
//    if ($number > 0) {
//        for ($i = $number; $i >= 3; $i--) {
//            if ($i % 3 === 0) {
//                echo $i . PHP_EOL;
//            }
//        }
//    }
//    else{echo 'Kintamasis number maziau uz 0';}
//}
//
//echo exercise10(60);
//function exercise11(int $number): void
//{
//    /*
//    Išspausdinkite skaičius nuo $number iki 0 pasinaudodami ciklu. Jeigu paduotas skaičius neigiamas,
//    funkcija nieko nespausdina.
//    Funkcijos kvietimas: exercise11(21)
//    Funkcija spausdina:
//    21
//    20
//    19
//    ...
//    1
//    0
//    */
//}
//function exercise11(int $number): void
//{
//    if ($number > 0) {
//        for ($i = $number; $i >= 0; $i--) {
//            echo $i . PHP_EOL;
//
//        }
//    }
//    else{echo 'Kintamasis number maziau uz 0';}
//}
//
//echo exercise11(21);
//function getNumbers(): array
//{
//    return [
//        99,
//        15,
//        28,
//        13,
//        145,
//        99,
//        12,
//        -57,
//        -36,
//    ];
//}
///*
//Kiekviena užduoties dalis turi būti funkcija. Tęskite funkcijų numeraciją: exercise12, exercise13 ir t.t.
//Masyvą gausite iškvietę funkciją 'getNumbers'
//12. Raskite ir grąžinkite visų masyvo narių sumą
//13. Raskite ir grąžinkite lyginių masyvo narių sumą
//14. Raskite ir grąžinkite teigiamų masyvo narių sumą
//15. Raskite ir grąžinkite sandaugą tų masyvo narių, kurie dalijasi iš 5
//16. Raskite ir grąžinkite masyvo narių vidurkį. Neigiamus skaičius paverskite į teigiamus
//17. Į masyvą pridėkite naują narį - skaičiu 255 - ir išspausdinkite masyva pasinaudodami funkcija 'printr'
//*/

//function getNumbers(): array
//{
//    return [
//        99,
//        15,
//        28,
//        13,
//        145,
//        99,
//        12,
//        -57,
//        -36,
//    ];
//}

//function exercise12 (array $array):int
//{
//    $sum=0;
//    foreach ($array as $value){
//        $sum+=$value;
//    }
// return $sum;
//}
//
//$getnumbersvalue=getNumbers();
//echo exercise12($getnumbersvalue);

//function exercise13 (array $array):int
//{
//    $sum=0;
//    foreach ($array as $value){
//        if($value%2===0){
//            $sum+=$value;
//        }
//    }
// return $sum;
//}
//
//$getnumbersvalue=getNumbers();
//echo exercise13($getnumbersvalue);

//function exercise14 (array $array):int
//{
//    $sum=0;
//    foreach ($array as $value){
//        if($value>0){
//            $sum+=$value;
//        }
//    }
//    return $sum;
//}
//
//$getnumbersvalue=getNumbers();
//echo exercise14($getnumbersvalue);

//function exercise15 (array $array):int
//{
//    $sum=1;
//    foreach ($array as $value){
//        if($value%5===0){
//            $sum*=$value;
//        }
//    }
//    return $sum;
//}
//
//$getnumbersvalue=getNumbers();
//echo exercise15($getnumbersvalue);

//function exercise16 (array $array):int
//{
//    foreach ($array as $key=>$value){
//        if($value<0){
//            $array[$key]=abs($value);
//        }
//    }
//    $total = array_sum($array);
//    $count = count($array);
//    return $total/$count;
//}
//
//$getnumbersvalue=getNumbers();
//echo exercise16($getnumbersvalue);

//function exercise17 (array $array):array
//{
//   $array[]=255;
//    return $array;
//}
//
//$getnumbersvalue=getNumbers();
//print_r(exercise17($getnumbersvalue));

$string = 'labas,';
$string = rtrim($string,',');
print_r($string);