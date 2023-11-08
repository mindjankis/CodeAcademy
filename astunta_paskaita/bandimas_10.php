<?php
declare (strict_types=1);

//function passwordValidator(string $password): string
//{
//    // $password > 8
//    // ['#', '$', '+', '!']
//    // $password contains number
//    if (strlen($password) < 8) {
//        return 'To short password. Password must contain min 8 chars';
//    }
//
//    $specialChars = ['#', '$', '+', '!'];
//    if (count(array_intersect($specialChars, str_split($password))) === 0) {
//        return "Password must contain on of this symbols: ['#', '$', '+', '!']";
//    }
//
//    $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
//    if (count(array_intersect($numbers, str_split($password))) === 0) {
//        return "Password must contain at least one number";
//    }
//
//    return 'Good password!';
//}

$someProducts = [
    '000_product_1  ',
    ' 000_product_2',
    '000_product_3  ',
    '000_product_4',
    '  000_product_5 ',
    '000_product_20
    ',
];

//function exercise1(): array
//{
//    /*
//    Išskaidykite $longLine kintamajį į atskirus žodžius. Žodžiai turi grįžti iš funkcijos masyvo formoje.
//    Skaidykite per underscore (_)
//    */
//    $longLine = 'Hello_how_are_you_doing?';
//
//    $temp=rtrim($longLine,'?');
//    return explode('_',$temp);
//}
//
//print_r(exercise1());

//function exercise2(): array
//{
//    /*
//    Grąžinkite masyvą, kuris talpintų tik tuos žodžius, kurie panašūs į emailų adresus
//    t.y. turi savyje simbolį @
//    */
//    $emails = [
//        'some@email.com',
//        'someAemail.com',
//        'another@gmail.com',
//        'notAreal.email.com',
//        'real@gmail.com',
//    ];
//
//    $arraystart = [];
//    foreach ($emails as $email)
//        if (str_contains($email,'@')){
//            $arraystart[]=$email;
//        }
//
//    return $arraystart;
//}
//
//print_r(exercise2());

//function exercise3(array $products): int
//{
//    /*
//    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą.
//    Naudokite $someProducts masyvą
//    */
//    $sum=0;
//    foreach ($products as $product){
//        var_dump($product);
//        $sum+=strlen($product);
//    }
//    return $sum;
//}
//
//echo exercise3($someProducts);


//function exercise4(): array
//{
//    /*
//    Kiekvienam žodžiui apskaičiuokite balsių skaičių (a, e, i, o, u)
//    Funkcijos kvietimas: exercise4()
//    Funkcija grąžina: [2, 3, 3, 1, 2]
//    */
//
//    $words = [
//        'tennis',
//        'rooftops',
//        'hillside',
//        'warm',
//        'friends',
//    ];
//    $arraystart=[];
//    foreach ($words as $word){
//        $arraystart[]=substr_count($word, 'e' )+
//            substr_count($word, 'a' )+
//            substr_count($word, 'o' )+
//            substr_count($word, 'u' )+
//            substr_count($word, 'i' );
//
//    }
//
//    return $arraystart;
//}
//
//print_r(exercise4());


//function exercise5(array $products): int
//{
//    /*
//    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą, BET
//    į sumą neįtraukite tuščių simbolių - ty. tarpų, new line ir pan.
//    Naudokite $someProducts masyvą.
//    */
//
//    $sum=0;
//    foreach ($products as $product){
//        $temp=trim($product);
//        $sum+=strlen($temp);
//    }
//    return $sum;
//}
//
//echo exercise5($someProducts);


//function exercise6(): int
//{
//    $text = 'The African philosophy of Ubuntu has its roots in the Nguni word for being human.
//    The concept emphasises the significance of our community and shared humanity and teaches
//    us that "A person is a person through others". Many view the philosphy as a counterweight
//    to the culture of individualism in our contemporary world.';
//
//    /*
//    Suskaičiuokite kiek balsių yra tekste
//    */
//    $arrayoftext=explode(' ',$text);
//    $arraystart=[];
//    foreach($arrayoftext as $value) {
//        $arraystart[] = substr_count($value, 'e') +
//            substr_count($value, 'a') +
//            substr_count($value, 'o') +
//            substr_count($value, 'u') +
//            substr_count($value, 'i') +
//            substr_count($value, 'y')+
//            substr_count($value, 'A');
//    }
//    return array_sum($arraystart);
//}
//echo exercise6();

//$text='Hello_how_are-you doing?';
//$inputarray=[' ', '-', '_'];
//function exercise1(string $stringToSplit, array $delimiters): array
//{
//    /*
//    Funkcija turi priimti string'ą, kuris bus skaidomas,
//    bei masyvą segmentų, pagal kuriuos bus skaidoma.
//
//    Kvietimas turi atrodyti taip:
//    exercise1('Hello_how_are-you doing?', [' ', '-', '_'])
//
//    Funkcijos outputas turėtų atrodyti taip:
//    ['Hello', 'how', 'are', 'you', 'doing?']
//    */
//$arraystart=[];
//$arraystart1=[];
//    $arraytemps=str_split($stringToSplit);
//    //print_r($arraytemps);
//    foreach ($arraytemps as $arraytemp){
//        if (in_array($arraytemp,$delimiters)){
//            $arraystart[]=($arraystart1);
//            $arraystart1=[];
//        }
//    else {$arraystart1[]=$arraytemp;}
//    }
//    $arraystart[]=($arraystart1);
//    $arraystart1=[];
//    foreach ($arraystart as $value){
//        $arraystart1[]=implode($value);
//
//    }
//    return $arraystart1;
//}
//
//print_r(exercise1($text, $inputarray));

//function exercise2(array $words): array{
//    $arraystart=[];
//    //$keytemp=[];
//    //$arrayetalonas=[];
//    foreach ($words as $word){
//        $key=substr($word, 0, 1);
//        if(key_exists($key, $arraystart)){
//            $arraystart[$key][]=$word;
//        }
//        else{$arraystart[$key][]=$word;}
//    }
//    ksort($arraystart);
//        //print_r($arraystart);
//    foreach ($arraystart as $key1 => $value){
//        if (is_string($key1)) {
//            $key2=strtolower($key1);
//            if (key_exists($key2, $arraystart)) {
//                $temp = array_merge($value, $arraystart[$key2]);
//                $arraystart[$key1] = $temp;
//                unset($arraystart[$key2]);
//            }
//        }
//    }
////    /*
////    Sukategorizuokite žodžius pagal jų pradžios simbolį.
////    Funkcija kviečiama:
////    exercise2(['hello', 'Hickup', '123', 'computer'])
////    Funkcijos outputas:
////    [
////        'h' => ['hello', 'Hickup'],
////        '1' => ['123'],
////        'c' => ['computer'],
////    ]
////    */
////
//    return $arraystart;
//}
//print_r(exercise2(['compas','hello', 'Hickup', 'habitas', '123', '456','124','Computer']));

//function exercise2(array $words): array
//{
//    /*
//    Sukategorizuokite žodžius pagal jų pradžios simbolį.
//    Funkcija kviečiama:
//    exercise2(['hello', 'Hickup', '123', 'computer'])
//    Funkcijos outputas:
//    [
//        'h' => ['hello', 'Hickup'],
//        '1' => ['123'],
//        'c' => ['computer'],
//    ]
//    */
//    $result = [];
//    foreach ($words as $word) {
//        $firstWordSymbolInLowerCase = lcfirst(substr($word, 0, 1));
//        $result[$firstWordSymbolInLowerCase][] = $word;
//    }
//
//    return $result;
//}
//
//function exercise3(array $words): array{
//    $arraystart=[];
//    foreach ($words as $word){
//        $vowels = substr_count($word, 'e') +
//            substr_count($word, 'E') +
//            substr_count($word, 'a') +
//            substr_count($word, 'A') +
//            substr_count($word, 'o') +
//            substr_count($word, 'O') +
//            substr_count($word, 'u') +
//            substr_count($word, 'U') +
//            substr_count($word, 'i') +
//            substr_count($word, 'I') +
//            substr_count($word, 'y')+
//            substr_count($word, 'Y');
//        $arraystart[$word]['vowels']=$vowels;
//        $consonants=substr_count($word, 'b') +
//            substr_count($word, 'B') +
//            substr_count($word, 'c') +
//            substr_count($word, 'C') +
//            substr_count($word, 'd') +
//            substr_count($word, 'D') +
//            substr_count($word, 'f') +
//            substr_count($word, 'F') +
//            substr_count($word, 'g') +
//            substr_count($word, 'G') +
//            substr_count($word, 'h')+
//            substr_count($word, 'H')+
//            substr_count($word, 'j') +
//            substr_count($word, 'J') +
//            substr_count($word, 'k') +
//            substr_count($word, 'K') +
//            substr_count($word, 'l') +
//            substr_count($word, 'L') +
//            substr_count($word, 'm') +
//            substr_count($word, 'M') +
//            substr_count($word, 'n') +
//            substr_count($word, 'N')+
//            substr_count($word, 'p')+
//            substr_count($word, 'P') +
//            substr_count($word, 'q') +
//            substr_count($word, 'Q') +
//            substr_count($word, 'r') +
//            substr_count($word, 'R') +
//            substr_count($word, 's') +
//            substr_count($word, 'S') +
//            substr_count($word, 't')+
//            substr_count($word, 'T')+
//            substr_count($word, 'v') +
//            substr_count($word, 'V') +
//            substr_count($word, 'w') +
//            substr_count($word, 'W') +
//            substr_count($word, 'x') +
//            substr_count($word, 'X') +
//            substr_count($word, 'z') +
//            substr_count($word, 'Z') ;
//        $arraystart[$word]['consonants']=$consonants;
//        $arraystart[$word]['length']=strlen($word);
//        $arraystart[$word]['starts_with']=substr($word, 0, 1);
//        $arraystart[$word]['ends_with']=substr($word, -1);
//    }
//
//
//    /*
//    Išveskite žodžių statistiką.
//    Funkcija kviečiama:
//    exercise2(['hello', 'you'])
//    Funkcijos outputas:
//    [
//        'hello' => [
//            'vowels' => 2,
//            'consonants' => 3,
//            'length' => 5,
//            'starts_with' => h,
//            'ends_with' => o,
//        ],
//        'you' => [
//            'vowels' => 3,
//            'consonants' => 0,
//            'length' => 3,
//            'starts_with' => y,
//            'ends_with' => u,
//        ]
//    ]
//    */
//
//    return $arraystart;
//}
//
//print_r(exercise3(['hello', 'you']));

//function getVowelsCount(string $word): int
//{
//    $letters = ['a', 'e', 'i', 'o', 'u', 'y'];
//
//    $count = 0;
//    foreach ($letters as $letter) {
//        $count += substr_count(strtolower($word), $letter);
//    }
//
//    return $count;
//}
//
//function getConsonantsCount(string $word): int
//{
//    $letters = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'];
//    $count = 0;
//
//    foreach ($letters as $letter) {
//        $count += substr_count(strtolower($word), $letter);
//    }
//
//    return $count;
//}
//function exercise4(): array
//{
//    /*
//    Grąžinkite masyvą, kuris savyje turėtų tik tuos žodžius, kurie arba prasideda, arba baigiasi
//    simboliais a, s, b, o
//    */
//    $emails = [
//        'some@email.com',
//        'someAemail.com',
//        'another@gmail.com',
//        'notAreal.email.io',
//        'real@gmail.com',
//    ];
//    $symbols=['a', 'b', 'o', 's'];
//    $result=[];
//    foreach ($emails as $email){
//        $startletter=substr($email,0,1);
//        $endletter=substr($email,-1);
//            if(in_array($startletter,$symbols) || in_array($endletter, $symbols)) {
//                $result[] = $email;
//            }
//    }
//    return $result;
//}
//
//print_r(exercise4());

