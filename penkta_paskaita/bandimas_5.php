<?php
declare (strict_types=1);


//function negative (int $skaicius):int{
//    return $skaicius*(-1);
//}
//echo negative(0);

//Užduotis #2
//Sukurkite funkcija 'kauliukas', kuri imituotu kauliuko metima. (I ekrana atspaudintu atsitiktiti skaiciu nuo 1 iki 6) (hint: rand);

//function kauliukas ():int{
//    return rand(1, 6);
//}
//
//echo kauliukas();

//Užduotis #3
//Sukurkite funkcija 'arEsiDarJaunas', kuri priimtu viena argumenta "$amzius" ir i ekrana isvestu pranesima, kiek metu truksta iki 100. (Pvz.: "Iki simto jums truksta 70 metu! Dar gyventi liko daug!")

//function arEsiDarJaunas ( int $amzius): string
//{
//    $skirtumas=100-$amzius;
//    if ($skirtumas>=55) {
//        return 'Iki simto jums truksta ' . $skirtumas . ' metu! Dar gyventi liko daug!';
//    }
//return 'Jus jau senas :(';
//}
//
//echo arEsiDarJaunas(60);

//Užduotis #4
//Parasykite funkcija 'pasisveikinimas', kuri priimtu 1 argumentas "$vardas" ir isvestu pranesima pvz.:
//" Labas JONAS!". Varda turetu isvesti didziosiomis raidemis, nepriklausomai nuo to, ar paduodame mazosiom
//ar dydziosiomis. (hint: strtoupper)

//function pasisveikinimas(string $vardas):void
//{
//    $vardas=strtoupper($vardas);
//    echo 'Labas ' . $vardas . '!';
//}
//
//echo pasisveikinimas('jonas');

//Užduotis #5
//Parasykite funkcija 'pusePloto', kuri priimtu 2 argumentus $a ir $b ir isvestu i ekrana puse abieju skaiciu
//sandaugos.
//
//function pusePloto (float $a, float $b):void{
//    $plotasresult=($a*$b)/2;
//    var_dump($plotasresult);
//}
//
//echo pusePloto(3.5, 3.5);

//ADVANCED
//Užduotis #6
//Parasykite funkcija 'kiekLaiko', kuri priimtu viena argumenta "$valandos" ir isvestu i ekrana,
// kiek sitame laiko tarpe yra pilnu dienu ir valandu. Pvz ivedame 26 --> gauname "1 diena(-u) ir 2 valandos(-u)"
// (hint floor)
//
//function kieklaiko (int $valandos) :void{
//    $valandosresult=floor($valandos/24);
//    $valandosresult1=$valandos%24;
//    echo $valandosresult . ' diena(-u) ir ' . $valandosresult1 .  ' valandos(-u)';
//}
//
//echo kieklaiko(48);
