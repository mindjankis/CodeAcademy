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
//    $result = [];
//    foreach ($emails as $email)
//        if (str_contains($email,'@')){
//            $result[]=$email;
//        }
//
//    return $result;
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
//    $result=[];
//    foreach ($words as $word){
//        $result[]=substr_count($word, 'e' )+
//            substr_count($word, 'a' )+
//            substr_count($word, 'o' )+
//            substr_count($word, 'u' )+
//            substr_count($word, 'i' );
//
//    }
//
//    return $result;
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
//    $result=[];
//    foreach($arrayoftext as $value) {
//        $result[] = substr_count($value, 'e') +
//            substr_count($value, 'a') +
//            substr_count($value, 'o') +
//            substr_count($value, 'u') +
//            substr_count($value, 'i') +
//            substr_count($value, 'y')+
//            substr_count($value, 'A');
//    }
//    return array_sum($result);
//}
//echo exercise6();

