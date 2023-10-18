<?php
declare (strict_types=1);

//1. Jonas Jonaitis, 42 metų vyras, nevędes, turi 2 vaikus - Petriuką ir Onutę.
//Petriukui 8 - eri, Onutei 5 - eri. Petriukas turi 2 augintinius - šuniuką Brisius ir pelytę Džeris.,
//Onutė turi vieną augintinį - katiną Tomas.
//Išreiškite šituos duomenys viename masyve "$zmogus".

$zmogus = [
    ['vardas' => 'Jonas',
     'pavadre' => 'Jonaitis',
     'lytis' => 'vyras',
     'amziausgrupe' => 'suauges',
     'amzius' => 42,
        'augintiniotipas' => 'neturi',
        'augintiniovardas1' => 'neturi',
        'augintiniovardas2' => 'neturi',
    ],
    ['vardas' => 'Petriukas',
    'pavadre' => 'Jonaitis',
    'lytis' => 'vyras',
        'amziausgrupe' => 'vaikas',
    'amzius' => 8,
        'augintiniotipas1' => 'suo',
        'augintiniotipas2' => 'pele',
        'augintiniovardas1' => 'Brisius',
        'augintiniovardas2' => 'Dzeris',

    ],
    ['vardas' => 'Onute',
        'pavadre' => 'Jonaityte',
        'lytis' => 'moteris',
        'amziausgrupe' => 'vaikas',
        'amzius' => 5,
        'augintiniotipas1' => 'katinas',
        'augintiniotipas2' => 'neturi',
        'augintiniovardas1' => 'Tomas',
        'augintiniovardas2' => 'neturi',
    ],
];

//print_r($zmogus);

//2. Prisiminkime laisvo kritimo formulę. Laisvo kritimo pagreitis (g) lygus 9.844. t => laikas sekundemis. s => atstumas metrais. Parašyki funkciją, kuri priimtu vieną argumentą "$laikas" ir gražintu atstumą, kurį įveiks kūnas krisdamas per $laikas sekundžių išmestas be pradinio greičio.
//a) Atlykime skaičiavumus su duomenimis 5 ,15, 20, 27.
//b) Pateikime rezultatus į ekraną "Kūnas per 2 sekundes nuskris 20m"
//c) Išveskime visų skaičiavimų suma, pvz. "Visi kūnai kartu krįsdami iveiks 800m kelią"
//function keliosskaiciavimas (float $laikas): string{
//    $array = [5,15,20,27,];
//    $sum = 0;
//    foreach ($array as $value){
//        $kelias = (pow($value,2)*9.844)/2;
//        $sum += $kelias;
//        echo $kelias.PHP_EOL;
//
//    }
//    $kelias = (pow($laikas,2)*9.844)/2;
//    echo 'Kūnas per ' . strval($laikas) . ' sekundes nukris ' . strval($kelias) . 'm'. PHP_EOL;
//    return 'Visi kūnai kartu kirįsdami iveiks ' . strval($sum) . 'm kelia';
//
//}
//echo keliosskaiciavimas(2);

//3. Parašykime funkciją , kuri priimtu vieną parametrą - skaičiu $skaicius, sukurtu masyvą iš
//atsitiktinių skaičių ir gražintu naujai sukurta masyvą kaip rezultatą.
//Masyvo elementų skaičius turi buti toks - kiek nurodome parametre $skaicius.

//function arrayofrandomnumbers (int $skaicius):array
//{
//    $result=[];
//    for($i=0; $i<$skaicius; $i++){
//        $result[] = rand(1,10);
//    }
//    return $result;
//}
//
//print_r(arrayofrandomnumbers(10));

//4. Parašykite funkciją, kuri priimtu vieną parametrą - masyvą $žmogus ir gražintu vidutinį vaikų amžių.
//function KidsAgeAverage (array $array): float{
//    $sum = 0;
//    $count = 0;
//    foreach ($array as $value){
//            if ($value['amziausgrupe']=== 'vaikas'){
//            $sum += $value['amzius'];
//            $count = $count+1;
//            }
//    }
//return $sum/$count;
//}
//echo KidsAgeAverage($zmogus);

//4.  Parašykite funkciją, kuri priimtu vieną parametrą - masyvą $žmogus ir gražintu masyvą su vaikų vardais.
//Be pavardžių.

//function ArrayOfKidsNames (array $array): array{
//    $vaikuvardai = [];
//    foreach ($array as $value){
//        if ($value['amziausgrupe']=== 'vaikas'){
//            $vaikuvardai[] = $value['vardas'];
//            }
//    }
//    return $vaikuvardai;
//}
//print_r(ArrayOfKidsNames($zmogus));

////5. Parašykite funkciją, kuri priimtu vieną parametrą - masyvą žmogus ir
////pridėtu jam dar vieną vaiką - 10 metu Andriu - augintiniu neturi.
//
//function AddElementToArrayZmogus (array $array): array{
//    $array[]  =
//        ['vardas' => 'Andrius',
//        'pavadre' => 'Jonatis',
//        'lytis' => 'vyras',
//        'amziausgrupe' => 'vaikas',
//        'amzius' => 10,
//        'augintiniotipas1' => 'neturi',
//        'augintiniotipas2' => 'neturi',
//        'augintiniovardas1' => 'neturi',
//        'augintiniovardas2' => 'neturi',
//    ];
//    return $array;
//}
//print_r(AddElementToArrayZmogus($zmogus));