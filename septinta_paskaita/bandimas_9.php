<?php
declare (strict_types=1);

//function getCities(): array
//{
//    return [
//        [
//            'name' => 'Tokyo',
//            'population' => 37435191,
//        ],
//        [
//            'name' => 'Delhi',
//            'population' => 29399141,
//        ],
//        [
//            'name' => 'Shanghai',
//            'population' => 26317104,
//        ],
//        [
//            'name' => 'Sao Paulo',
//            'population' => 21846507,
//        ],
//        [
//            'name' => 'Mexico City',
//            'population' => 21671908,
//        ],
//        [
//            'name' => 'New York',
//            'population' => 25000000,
//        ],
//    ];
//}

//function exercise1(): int
//{
//    /*
//    Suskaičiuokite bendrą miestų populiaciją pasinaudodami paprastu 'foreach' ir grąžinkite ją iš funkcijos.
//    Miestus pasiimkite iškvietę funkciją 'getCities'
//    */
//
//    return 0;
//}
//

//function exercise1(array $array): int{
//   $result = 0;
//    foreach ($array as $value ){
//        $result+=$value['population'];
//    }
//    return $result;
//}
//
//print_r(exercise1(getCities()));


//function exercise2(): int
//{
//    /*
//    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcijomis array_column ir array_sum
//    ir grąžinkite ją iš funkcijos
//    */
//
//    return 0;
//}
//function exercise2(array $array): int{
//        $resultarray=array_column($array, 'population');
//        $result=array_sum($resultarray);
//        return $result;
//}
//print_r(exercise2(getCities()));

//function exercise3(): int
//{
//    /*
//    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcija array_reduce ir grąžinkite ją iš funkcijos
//    */
//
//    return 0;
//}
//
//function exercise3(array $array): int{
//    $result1 =array_reduce($array, function(int $sum, array $population){
//                return $sum+$population['population'];
//    },
//        0);
//    return $result1;
//}
//
//print_r(exercise3(getCities()));


//function exercise4(): int
//{
//    /*
//    Suskaičiuokite populiaciją miestų, kurie yra didesni nei 25,000,000 gyventojų.
//    Rinkites sau patogiausią skaičiavimo būdą.
//    */
//
//    return 0;
//}
//
//function exercise4(array $array): int{
//    $sum =0;
//    foreach ($array as $value){
//        if ($value['population'] >= 25000000){
//            $sum+=$value['population'];
//        }
//    }
//    return $sum;
//}
//print_r(exercise4(getCities()));

//function exercise5(): array
//{
//    /*
//    Grąžinkite masyvą, kuriame būtų tik tie miestai, kurie yra didesni nei 25,000,000 gyventojų
//    Rezultatas turi būti tokios pat struktūros, kaip ir pradinis miestų masyvas:
//    [
//        [
//            'name' => 'Tokyo',
//            'population' => 37435191,
//        ],
//        ...
//    ]
//    */
//
//    return [];
//}

//function exercise5(array $array): array{
//    $result = array_filter($array,
//        function($array){
//        if($array['population']>=25000000){
//            return true;
//        }
//
//    },);
//    return $result;
//}
//print_r(exercise5(getCities()));

//function exercise6(): int
//{
//
//    /*
//    Suskaičiuokite ir grąžinkite bendrą užsakymo sumą.
//    Prekėms, kurių pavadinimai nurodyti masyve $lowPriceItems, taikykite kainą 'priceLow'.
//    Kitoms prekėms taikykite kainą 'priceRegular'.
//    Bandykite panaudoti array_* funkcijas.
//    */
//
//    $lowPriceItems = ['t-shirt', 'shoes'];
//
//    $orderItems = [
//        [
//            'name' => 't-shirt',
//            'priceRegular' => 15,
//            'priceLow' => 13,
//            'quantity' => 3,
//        ],
//        [
//            'name' => 'coat',
//            'priceRegular' => 74,
//            'priceLow' => 60,
//            'quantity' => 6,
//        ],
//        [
//            'name' => 'shirt',
//            'priceRegular' => 25,
//            'priceLow' => 20,
//            'quantity' => 2,
//        ],
//        [
//            'name' => 'shoes',
//            'priceRegular' => 115,
//            'priceLow' => 100,
//            'quantity' => 1,
//        ],
//    ];
//
//
//    return 0;
//}

//function exercise6(): int{
//    $lowPriceItems = ['t-shirt', 'shoes'];
//
//    $orderItems = [
//        [
//            'name' => 't-shirt',
//            'priceRegular' => 15,
//            'priceLow' => 13,
//            'quantity' => 3,
//        ],
//        [
//            'name' => 'coat',
//            'priceRegular' => 74,
//            'priceLow' => 60,
//            'quantity' => 6,
//        ],
//        [
//            'name' => 'shirt',
//            'priceRegular' => 25,
//            'priceLow' => 20,
//            'quantity' => 2,
//        ],
//        [
//            'name' => 'shoes',
//            'priceRegular' => 115,
//            'priceLow' => 100,
//            'quantity' => 1,
//        ],
//    ];
//    $total=0;
//        foreach ($orderItems as $value){
//            $itemprice=in_array($value['name'],$lowPriceItems,true) ?
//                $value['priceLow'] : $value['priceRegular'];
//            echo $itemprice . PHP_EOL;
//                $total+=$itemprice*$value['quantity'];
//            echo $total . PHP_EOL;
//        }
//    return $total;
//}
//print_r(exercise6());

function getShoppingCart(): array
{
    return [
        'products' => [
            'Comfy chair' => 'no data',
            'Yellow lamp' => [
                'price' => 15.3,
                'quantity' => 2,
            ],
            'Didzioji sofa' => [
                'pavadinimas' => 'Didzioji sofa',
                'kaina' => 'trylika eurų'
            ],
            'Softest rug' => [
                'price' => 27.3,
                'quantity' => 3,
                'discount' => 13,
            ],
            'Blue shelf' => [1],
        ],
        'cartDiscounts' => [5, 16, 15],
    ];
}
//// Visose užduotyse stenkitės naudoti array funkcijas
//
//function exercise1(): void
//{
//
//    /*
//    Išspausdinti visų krepšelio produktų pavadinimus vienoje eilutėje.
//    Comfy chair, Yellow lamp, Didzioji sofa, Softest rug, Blue shelf
//    */
//}
//print_r(getShoppingCart());die;
//function exercise1(): void{
//$shopingcartarray=getShoppingCart();
//$shopingcartproducts=$shopingcartarray['products'];
//$result=array_keys($shopingcartproducts);
//$resultfinal=implode(', ',$result);
//print_r($resultfinal);
//}
//exercise1();

//function exercise2(): float
//{
//    /*
//    Suskaičiuokite pirkimų krepšelio bendrą sumą (price * quantity)
//    Kaip matote, krepšelio duomenys, kuriuos gavome iš svetimos sistemos, yra netvarkingi.
//    - Skaičiuojant reikėtų atsižvelgti tik į produktus, kurie turi laukus 'price' ir 'quantity'.
//    Jeigu produkto laukai užvadinti kitais pavadinimais arba iš viso jų neturi, tą produktą reikia ignoruoti.
//
//    */
//
//    return 0;
//}
//
//function exercise2(): float
//{
//    $shopingcartarray = getShoppingCart();
//    $shopingcartproducts = $shopingcartarray['products'];
//    $total=0;
//    foreach ($shopingcartproducts as $value) {
//        if (is_array($value)) {
//                if((key_exists('price',$value) && key_exists('quantity',$value))){
//                $total+=$value['price']*$value['quantity'];
//                }
//        }
//    }
//    return $total;
//}
//print_r(exercise2());

//function exercise3(): float
//{
//
//    /*
//    Suskaičiuokite pirkinių krepšelio bendrą sumą.
//    Galioja tos pačios salygos kaip ir funkcijoje exercise2, bet papildomai reikia:
//    - Skaičiuojant bendrą sumą pritaikyti nuolaidas.
//    Nuolaida laikoma 'cartDiscounts' masyve, taip pat nuolaida gali būti ir prie produkto - 'discount'.
//    Abi reikšmės yra išreikštos procentais.
//    Nuolaidos sumuojasi.
//    Krepšelio nuolaida taikoma bendrai krepšelio sumai.
//    Naudojama tik viena, didžiausia su krepšeliu susieta nuolaida ('cartDiscounts').
//    */
//
//    return 0;
//}

//function exercise3(): float
//{
//    $shopingcartarray = getShoppingCart();
//    $shopingcartproducts = $shopingcartarray['products'];
//    $total=0;
//    foreach ($shopingcartproducts as $value) {
//        if (is_array($value)) {
//                if((key_exists('price',$value) && key_exists('quantity',$value))){
//                    $productdiscount=key_exists('discount',$value) ? $value['discount'] : 0;
//                    $temp=(100-$productdiscount)/100;
//                $total+=$value['price']*$value['quantity']*$temp;
//                }
//        }
//    }
//    $result=((100-max($shopingcartarray['cartDiscounts']))/100)*$total;
//    return $result;
//}
//print_r(exercise3());

//function exercise4(array $newIpList): array
//{
//    $existingIpList = [
//        '1.17.2.1',
//        '15.1.2.1',
//        '1.9.2.1',
//        '1.1.98.1',
//        '1.1.2.12',
//        '1.11.2.1',
//        '122.1.2.1',
//        '1.31.2.1',
//        '33.12.2.1',
//    ];
//
//    /*
//    Sukategorizuokite ip adresų sąrašą.
//    ipsNew - ip iš $newIpList, kurių nėra $existingIpList
//    ipsOld - ip iš $existingIpList, kurių nėra $newIpList
//    ipsRemaining - ip, kurie egzistuoja abiejuose sąrašuose
//    funkcija butu kviečiam taip:
//    exercise4(
//        ['15.1.2.1', '16.1.8.1', '15.1.8.1']
//    );
//    */
//    $result = [
//        'ipsNew' => [],
//        'ipsOld' => [],
//        'ipsRemaining' => [],
//    ];
//
//    return $result;
//}
//
//function exercise4(array $newIpList): array
//{
//    $existingIpList = [
//        '1.17.2.1',
//        '15.1.2.1',
//        '1.9.2.1',
//        '1.1.98.1',
//        '1.1.2.12',
//        '1.11.2.1',
//        '122.1.2.1',
//        '1.31.2.1',
//        '33.12.2.1',
//    ];
//    $ipsNew = array_diff($newIpList, $existingIpList);
//    $ipsOld = array_diff($existingIpList, $newIpList );
//    $ipsRemaining = array_merge($ipsNew,$ipsOld);
//
//    $result = [
//        'ipsNew' => $ipsNew,
//        'ipsOld' => $ipsOld,
//        'ipsRemaining' => $ipsRemaining,
//    ];
//    return $result;
//}
//    print_r(exercise4(['15.1.2.1', '16.1.8.1', '15.1.8.1']));

//function exercise5(): string
//{
//    $words = [
//        'over',
//        'jumps',
//        'fox',
//        'Quick',
//        'dog',
//        'lazy',
//        'very',
//        'the',
//    ];
//
//    /*
//    "Išverskite" masyvą į kitą pusę ir paverskite į string tipo reikšmę.
//    Arčiausiai vidurio esantys masyvo elementai turėtų atsirasti šonuose.
//    Masyvo elementų skaičius galėtų dideti, bet jis visada bus lyginis.
//    Rezultatas turėtų būti - 'Quick fox jumps over the very lazy dog'
//    */
//    return '';
//}
//
//function exercise5(): string
//{
//    $words = [
//        'over',
//        'jumps',
//        'fox',
//        'Quick',
//        'dog',
//        'lazy',
//        'very',
//        'the',
//    ];
//    if(count($words)%2!==0){
//        return 'Masyvo elementu skaicius nera lyginis';
//    }
//    $count=count($words)/2;
//    $firstarray=array_splice($words, 0, $count);
//    $secondarray=$words;
//    $firstarray1=array_reverse($firstarray);
//    $secondarray1=array_reverse($secondarray);
//    $finalarray=array_merge($firstarray1,$secondarray1);
//
//    return implode(' ',$finalarray);
//}
//print_r(exercise5());
///*
//    exercise 6
//    Parašykite savo array_map funkcijos versiją nesinaudodami pačia array_map funkcija
//*/
//function array_map_custom(callable $callback, array $array): array
//{
//    return [];
//}
//
///*
/*
    exercise 6
    Parašykite savo array_map funkcijos versiją nesinaudodami pačia array_map funkcija
*/
//function array_map_custom(callable $callback, array $array): array
//{
//    $result = [];
//
//    foreach ($array as $value) {
//        $result[] = $callback($value);
//    }
//
//    return $result;
//}
//
//$products = [
//    [
//        'name' => 'Sofa ',
//        'price' => '15',
//    ],
//    [
//        'name' => 'chair',
//        'price' => '85',
//    ],
//];
//
//$result = array_map_custom(
//    function (array $product) {
//        $product['count'] = 0;
//
//        return $product;
//    },
//    $products
//);
//
//print_r($result);

//    exercise 7
//    Parašykite savo array_filter funkcijos versiją nesinaudodami pačia array_filter funkcija
//*/
//function array_filter_custom(array $array, ?callable $callback): array
//{
//    return [];
//}
$products = [
    [
        'name' => 'sofa',
        'price' => 15,
    ],
    [
        'name' => 'chair',
        'price' => 85,
    ],
];
function array_filter_custom(array $array, $pricefilter):array{
    foreach ($array as $key => $value) {
        if($value['price']>$pricefilter){
            unset($array[$key]);
        }

    }
    return $array;
}

print_r(array_filter_custom($products,50));





///*
//    exercise 8
//    Parašykite savo array_reduce funkcijos versiją nesinaudodami pačia array_reduce funkcija
//*/
//function array_reduce_custom(array $array, callable $callback, $carry)
//{
//    return 'array reduced to string';
//}

