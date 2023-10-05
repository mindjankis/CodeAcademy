<?php
declare(strict_types=1);
//1.
//echo (987 + 545 - 32 * 94).PHP_EOL;
//echo (32 ** 3 + 18).PHP_EOL;
//echo (120/4/3).PHP_EOL;
//echo (187 % 5).PHP_EOL;
//$i=3;
//$i++;
//$i++;
//$i++;
//echo $i.PHP_EOL;
//$i=12;
//$i--;
//$i--;
//$i--;
//$i--;
//echo $i.PHP_EOL;

//2.
//for ($i=1;$i<11;$i++){
//    echo $i.PHP_EOL;
//}
//$i = 1;
//while ($i<11){
//    echo $i.PHP_EOL;
//    $i++;
//}
$i = 1;
//do {
//    echo $i.PHP_EOL;
//    $i++;
//}
//    while ($i<11);
//$array =[1,2,3,4,5,6,7,8,9,10];
//    foreach ($array as $index) {
//        echo $index.PHP_EOL;

//3.
//Išspausdinkite skaičius nuo 15 iki 3 naudodamiesi ciklu. Panaudokite sau patogiausią ciklą.
//Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
//for ($i=15;$i>2;$i--){
//    echo $i.PHP_EOL;
//}

//4.
//Išspausdinkite kas antrą skaičių nuo 1 iki 20 naudodamiesi ciklu.
//Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
//for ($i=0;$i<20;$i++){
//    $i=$i+1;
//    echo $i.PHP_EOL;
//}

//5.
//Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3.
//Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
//for ($i=3;$i<20;$i++){
//    if (($i%3)===0){
//        echo $i.PHP_EOL;
//    }
// }

/*
6. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3 arba iš 5.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/
//for ($i=3;$i<21;$i++){
//    if ((($i%3)===0 || ($i%5)===0)){
//        echo $i.PHP_EOL;
//    }
// }

/*
//7. Iteruokite per skaičius, nuo 1 iki 20.
//Jeigu skaičius dalijasi iš 3, išspausdinkite žodį 'Hey'.
//Jeigu skaičius dalijasi iš 5, išspausdinkite žodį Ho'.
//Jeigu skaičius dalijasi ir iš 5, ir iš 3, išspausdinkite žodį 'HeyHo'.
//Kitu atveju išspausdinkite skaičių.
//Viskas turi būti atspausdinti vienoje eilutėje su tarpais:
//1 2 Hey 4 Ho Hey 7 8 Hey Ho 11 Hey 13 14 HeyHo 16 17 Hey 19 Ho
*/
//for ($i=1;$i<21;$i++){
//    $j=1;
//    $k=1;
//    if($i%3===0 && $i%5===0) {
//        echo 'HeyHo' . ' ';
//        $j = 0;
//        $k=0;
//    }
//        if ($i%3===0 && $k!==0){
//        echo 'Hey'.' ';
//        $j=0;
//    }
//    if ($i%5===0 && $k!==0){
//        echo 'Ho'.' ';
//        $j=0;
//    }
//        if($j!=0){
//        echo $i . ' ';
//    }
//}


/*
8. Raskite sveikų skaičių nuo 1 iki 100 sumą.
/*
//Initialize a variable to store the sum
//$sum = 0;
//
//Loop through numbers from 1 to 100 and add them to the sum
//for ($i = 1; $i <= 100; $i++) {
//    $sum += $i; // Add the current number to the sum
//}
//
//Print the sum
//echo 'The sum of numbers from 1 to 100 is: ' . $sum;

/*
9. Pasinaudodami ciklu išspausdinkite savaitės dienas iš masyvo $days vienoje eilutėje:
monday-tuesday-wednesday-thursday-friday-saturday-sunday-
*/

//$dienos = [
//    'monday',
//    'tuesday',
//    'wednesday',
//    'thursday',
//    'friday',
//    'saturday',
//    'sunday',
//];
//foreach($dienos as $diena){
//echo $diena.PHP_EOL;
//}

/*
10. Iteruokite sveikus skaičius nuo -5 iki 5.
Išspausdinkite skaičių dvejopai:
1. Pasinaudojant paprastu echo
2. Pasinaudojant funkcija var_dump ir prieš tai pavertus į 'bool' tipo reikšmę

-5
bool(true)
-4
bool(true)
...

HINT: atkreipkite dėmesį į ką pavirsta skaičius 0
*/
//for($i=-5;$i<=5;$i++){
//    echo $i.PHP_EOL;
//    var_dump((bool)$i).PHP_EOL;
//}