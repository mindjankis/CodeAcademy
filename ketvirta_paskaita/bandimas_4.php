<?php
declare (strict_types=1);
// Visur sudėkite reikiamus parametrų bei return tipus

/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/
//function dividesBy5(int $a): int {
//    return $a%5;
//
//}
//echo dividesBy5(10);



/*
2. Parašykite funkciją 'arrayPrinter', kuri priimtų array tipo parametrą ir
išspausdintų kiekvieną masyvo elementą naujoje eilutėje.

Funkcijos kvietimas: arrayPrinter(['some text', 'another text'])
Funkcija grąžina: funkcija nieko negrąžina - ji tik išspausdina masyvą į terminalą:
'some text'
'another text'
...
*/
//function arrayPrinter(array $arr):void {
//    foreach($arr as $element) {
//        echo $element . PHP_EOL;
//    }
//}
//
//$array = array('some text', 'another text');
//arrayPrinter($array);
/*
3. Parašykite funkciją 'stringEnhancer', kuri grąžintų pakeistą tekstą.

Funkcijos kvietimas: stringEnhancer('some text', '##')
Funkcija grąžina: '##some text##'

Funkcijos kvietimas: stringEnhancer('some text')
Funkcija grąžina: '**some text**'
*/

//$logika = true;
//echo var_dump(!is_null($logika));

//function stringEnhancer(string $string1, ?string $string2):string
//{
//    if (isset($string2)) {
//        $result = '##' . $string1 . '##';
//    } else {
//        $result = '**' . $string1 . '**';
//    }
//    return $result;
//}
//echo stringEnhancer('some text',null);
/*
4. Parašykite funkciją 'stringModifier', kuri pamodifikuotų paduotą string tipo kintamąjį.

Funkcijos kvietimas:
$x = 'some text';
stringModifier($x, '##');
echo $x; // '##some text##'

Funkcija grąžina: funkcija nieko negrąžina

*/
//function stringModifier(string $x, string $y):string{
//  $result=$y.$x.$y;
//  return $result;
//}
//echo stringModifier('some text','##');


/*
5. Parašykite funkciją 'textReplicator', kuri grąžintų 'padaugintą' tekstą.

Funkcijos kvietimas:
textReplicator('some_text', 3);

Funkcija grąžina: 'some_text-some_text-some_text'

Funkcijos kvietimas:
textReplicator('some_text', null);
*/

//function textReplicator(string $text, ?int $magnifier):string
//{
//    if (isset($magnifier))
//    {
//        for($i=1;$i<$magnifier;$i++)
//        {
//        echo $text;
//        }
//        }
//    return 'some_text';
//}
//echo textReplicator('some_text-',5);


/*
6. Paverskite funkciją 'textReplicator', į veikiančią anoniminę funkciją.
*/
$textreplicator=function(string $text, ?int $magnifier):string
{
    if (isset($magnifier))
    {
        for($i=1;$i<$magnifier;$i++)
        {
        echo $text;
        }
        }
    return 'some_text';
};
echo $textreplicator('some_text-',5);
