<?php
declare (strict_types=1);
//function exercise1(): array
//{
//    $products = [
//        'item_1' => 'desk',
//        'item_2' => 'lamp',
//        'item_3' => 'error',
//        'item_4' => 'sofa',
//        'item_5' => 'error',
//    ];
//
//    /*
//    Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
//    Tikėkitės, kad $products masyvas gali turėti ne 5, 100 elementų - naudokite ciklą.
//    */
//
//    return [];
//}
//function exercise1(): array{
//    $products = [
//        'item_1' => 'desk',
//        'item_2' => 'lamp',
//        'item_3' => 'error',
//        'item_4' => 'sofa',
//        'item_5' => 'error',
//    ];
//    foreach ($products as $key => $value){
//        if ($value==='error'){
//            unset($products[$key]);
//        }
//    }
//    return $products;
//}
//print_r(exercise1());


//function exercise2(int $keyPart)
//{
//    $products = [
//        'product_1' => 'desk',
//        'product_2' => 'lamp',
//        'product_3' => 'sofa',
//    ];
//
//    /*
//    Sunaikinkitę reikšmę, kuri atitiktų raktą 'product_' + $keyPart ir grąžinkite pamodifikuotą masyvą.
//    Jeigu tokio rakto nėra, gražinkite null. Pridėkite trūkstamą return tipą.
//    Funkcijos kvietimas: exercise2(1)
//    */
//
//    return [];
//}
//function exercise2(int $keyPart): ?array
//{
//    $products = [
//        'product_1' => 'desk',
//        'product_2' => 'lamp',
//        'product_3' => 'sofa',
//    ];
//    $productstart=$products;
//foreach ($products as $key => $value){
//        if ($key==='product_' . $keyPart){
//            unset($products[$key]);
//        }
//    }
//        if($products===$productstart){
//            echo 'tokio key masyve nera';
//            $products=null;
//        }
//    return $products;
//}
//
//print_r(exercise2(4));

//function exercise3(): array
//{
//    $transactions = [
//        [
//            'total' => 200,
//            'status' => 'error',
//        ],
//        [
//            'total' => 150,
//            'status' => 'completed',
//        ],
//    ];
//
//    /*
//    Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
//    Tikėkitės, kad $products masyvas gali turėti ne 5, 100 elementų - naudokite ciklą.
//    */
//
//    return [];
//}
//function exercise3(): array{
//    $transactions = [
//        [
//            'total' => 200,
//            'status' => 'error',
//        ],
//        [
//            'total' => 150,
//            'status' => 'completed',
//        ],
//    ];
//    foreach ($transactions as $key => $value){
//        foreach ($value as $key1 => $value1){
//                    if ($value1==='error'){
//                        unset($transactions[$key][$key1]);
//                    }
//        }
//    }
//    return $transactions;
//}
//print_r(exercise3());
////print_r($transactions);

//function exercise4(string $key): string
//{
//    $products = [
//        'product_1' => 'shirt',
//        'product_2' => 'trousers',
//        'product_98' => 'coat',
//    ];
//    /*
//    Funkcija turi grąžinti reikšmę pagal paduota raktą.
//    Jeigu paduotas raktas neegzistuoja $products masyve, gražinkite tekstą 'Item not found'.
//    Funkcijos kvietimas: exercise4('product_2')
//    */
//
//    return '';
//}

//function exercise4(string $key): string{
//    $products = [
//        'product_1' => 'shirt',
//        'product_2' => 'trousers',
//        'product_98' => 'coat',
//    ];
//    if (array_key_exists($key, $products)) {
//        $result=$products[$key];
//    }
//    else {
//        $result='Item not found';
//    }
//    return $result;
//}
//
//print_r(exercise4('product_3'));

//function exercise5(): array
//{
//    $transactions = [
//        [
//            'count' => 2,
//            'price' => 13,
//        ],
//        [
//            'count' => 15,
//            'price' => 14,
//        ],
//    ];
//    /*
//    Kiekvienai iš transakcijų, esančių kintamajame $transactions, suskaičiuokite galutinę sumą ir pridėkite į
//    transakciją su raktu 'total'. Grąžinkite $transactions iš funkcijos.
//    Tikėkitės, kad transakciju skaičius gali išaugti. Jų gali būti ne 2, o 100. Dėl to naudokite ciklą.
//    Laukiamas rezultatas:
//    [
//        [
//            'count' => 2,
//            'price' => 13,
//            'total' => 26,
//        ],
//        ...
//    ];
//    */
//
//    return [];
//}
//function exercise5(): array
//{
//    $transactions = [
//        [
//            'count' => 2,
//            'price' => 13,
//        ],
//        [
//            'count' => 15,
//            'price' => 14,
//        ],
//    ];
//    foreach ($transactions as $key => $value) {
//        $total = $value['count'] * $value['price'];
//        $transactions[$key]['total'] = $total;
//    }
//    return $transactions;
//}
//
//print_r(exercise5());

//function exercise6(): array
//{
//    $currencyRates = [
//        'usd' => 1.13,
//        'gbp' => 0.83,
//    ];
//
//    $transactions = [
//        [
//            'count' => 2,
//            'price' => 3.55
//        ],
//        [
//            'count' => 15,
//            'price' => 14.1
//        ],
//    ];
//    /*
//    Kiekvienai iš transakcijų, esančių kintamajame $transactions, suskaičiuokite galutinę sumą visomis valiutomis
//    esančiomis kintamajame $currencyRates (taip pat ir bazine valiuta - eur) ir pridėkite į transakciją su raktu 'totals'.
//    Apvalinkite dviejų skaitmenų po kablelio tikslumu.
//    Grąžinkite pamodifikuotą $transactions masyvą iš funkcijos.
//    Tikėkitės, kad transakciju skaičius gali išaugti. Jų gali būti ne 2, o 100. Dėl to naudokite ciklą.
//    Valiutų skaičius taip pat gali augti.
//    Laukiamas rezultatas:
//    [
//        [
//            'count' => 2,
//            'price' => 3.55,
//            'totals' => [
//                'eur' => ...,
//                'usd' => ...,
//                'gbp' => ...,
//            ],
//        ],
//        ...
//    ];
//    */
//
//    return [];
//}
//function exercise6(): array{
//    $currencyRates = [
//        'usd' => 1.13,
//        'gbp' => 0.83,
//    ];
//
//    $transactions = [
//        [
//            'count' => 2,
//            'price' => 3.55
//        ],
//        [
//            'count' => 15,
//            'price' => 14.1
//        ],
//    ];
//
//    foreach ($transactions as $key => $value) {
//        $totals=[];
//        $total = $value['count'] * $value['price'];
//        $transactions[$key]['totals'] = $totals;
//        $transactions[$key]['totals']['eur']=$total;
//        foreach ($currencyRates as $key1 => $value1){
//            $transactions[$key]['totals'][$key1]=round(($total*$value1),2);
//        }
//
//    }
////print_r($transactions);
//  return $transactions;
//}
//print_r(exercise6());

//function exercise7(array $collection): array
//{
//    /*
//    Funkcijai paduodama produktų kolekcija:
//    $productCollection = [
//        [
//            'name' => 'Best sofa',
//            'price' => '55,
//        ],
//        ...
//    ];
//    exercise7($productCollection);
//    Funkcija turi grąžinti performuota kolekciją - 'name' turi tapti kolekcijos elemento raktu:
//    [
//        'Best sofa' => [
//            'price' => '55,
//        ],
//        ...
//    ]
//    */
//
//    return [];
//}
//    $productCollection = [
//        [
//            'name' => 'Best sofa',
//            'price' => 55,
//        ],
//        [
//            'name' => 'Table',
//            'price' => 100,
//        ]
//    ];
//function exercise7(array $collection): array
//{
//    foreach ($collection as $key => $value) {
//        $newkey = $collection[$key]['name'];
//        $newvalue = $collection[$key]['price'];
//        $value1 = [];
//        $collection[$key][$newkey] = $value1;
//        unset($collection[$key]['name']);
//        $collection[$key][$newkey]['price'] = $newvalue;
//        unset($collection[$key]['price']);
//
//    }
//    return $collection;
//}
//print_r(exercise7($productCollection));



//}
//function exercise8(): array
//{
//    $products = [
//        'desk',
//        'lamp',
//        'sofa',
//        'error',
//    ];
//
//    /*
//    Išskaidykite produktų pavadinimus į raides.
//    [
//        'desk' => [
//            'd',
//            'e',
//            's',
//            'k',
//        ],
//        ...
//    ]
//    */
//
//    return [];
//}
//function exercise8(): array{
//    $products = [
//        'desk',
//        'lamp',
//        'sofa',
//       'error',
//    ];
//    foreach ($products as $key =>$value) {
//        $stringarray = str_split($value);
//        $products[$key] = $stringarray;
//    }
//    return $products;
//}
//print_r(exercise8());

//function exercise9(): void
//{
//    $animals = [
//        [
//            'type' => 'water',
//            'name' => 'shark',
//        ],
//        [
//            'type' => 'land',
//            'name' => 'chimp',
//        ],
//        [
//            'type' => 'water',
//            'name' => 'hippo',
//        ],
//        [
//            'type' => 'water',
//            'name' => 'crocodile',
//        ],
//        [
//            'type' => 'land',
//            'name' => 'cat',
//        ],
//        [
//            'type' => 'land',
//            'name' => 'dog',
//        ],
//    ];
//
//    /*
//    Išspausdinkite gyvūnus sugrupuotus pagal tipą.
//    Rezultatas:
//    land: chimp dog cat
//    water: shark hippo crocodile
//    */
//}
//function exercise9(): void
//{
//    $animals = [
//        [
//            'type' => 'water',
//            'name' => 'shark',
//        ],
//        [
//            'type' => 'land',
//            'name' => 'chimp',
//        ],
//        [
//            'type' => 'water',
//            'name' => 'hippo',
//        ],
//        [
//            'type' => 'water',
//            'name' => 'crocodile',
//        ],
//        [
//            'type' => 'land',
//            'name' => 'cat',
//        ],
//        [
//            'type' => 'land',
//            'name' => 'dog',
//        ],
//    ];
//        $land=[];
//        $water=[];
//    foreach ($animals as $key => $value){
//            if($animals[$key]['type']==='land'){
//            $land[]=$animals[$key]['name'];
//            }
//            else {$water[]=$animals[$key]['name'];}
//
//    }
//    echo 'land: ' . implode(' ',$land) . PHP_EOL;
//    echo 'water: ' . implode(' ',$water);
//
//}
//echo exercise9();

//function getProducts(): array
//{
//    return [
//        'chair' => [
//            'type' => 'furniture',
//            'name' => 'Best chair',
//            'price' => 15,
//        ],
//        'lamp' => [
//            'type' => 'lighting',
//            'name' => 'Ultimate lamp',
//            'price' => 99,
//        ],
//        'sofa' => [
//            'type' => 'furniture',
//            'name' => 'Soft sofa',
//            'price' => 350
//        ],
//    ];
//}
//
//function exercise10(): array
//{
//    $products = getProducts();
//    /*
//    Į masyvą $products pridėkite naują narį ir grąžinkite naujajį masyvą. Nario 'key' - 'fridge'.
// Nario reikšmė:
//    [
//        'type' => 'appliance',
//        'name' => 'Coolest fridge',
//        'price' => 200,
//    ]
//    */
//
//    return [];
//}
function getProducts(): array
{
    return [
        'chair' => [
            'type' => 'furniture',
            'name' => 'Best chair',
            'price' => 15,
        ],
        'lamp' => [
            'type' => 'lighting',
            'name' => 'Ultimate lamp',
            'price' => 99,
        ],
        'sofa' => [
            'type' => 'furniture',
            'name' => 'Soft sofa',
            'price' => 350
        ],
    ];
}

//function exercise10(): array
//{
//    $products = getProducts();
//    $fridge = [];
//    $products['fridge'] = $fridge;
//        $products['fridge']['type'] = 'appliance';
//        $products['fridge']['name'] = 'Coolest fridge';
//        $products['fridge']['price'] = 200;
//
//    return $products;
//}
//
//print_r(exercise10());

//function exercise11(): int
//{
//    $products = getProducts();
//    /*
//    Raskite ir grąžinkite visų produktų kainų vidurkį
//    */
//
//    return 0;
//}

//function exercise11(): float
//{
//    $products = getProducts();
//    $sum = 0;
//    $count = count($products);
//    foreach($products as $key =>$value)
//    {
//        $sum += $products[$key]['price'];
//    }
//
//    return $sum/$count;
//}
//
//print_r(exercise11());

//function exercise12(): array
//{
//    $products = getProducts();
//    /*
//    Sudėkite visų produktų pavadinimus į masyvą ir jį grąžinkite
//    [
//        'Best chair',
//        'Ultimate lamp',
//        'Soft sofa',
//    ]
//    */
//
//    return [];
//}

//function exercise12(): array
//{
//    $products = getProducts();
//    $result = [];
//    foreach ($products as $key => $value){
//        $result[] = $products[$key]['name'];
//            }
//    return $result;
//}
//
//print_r(exercise12());

//function exercise13(): void
//{
//    $products = getProducts();
//    /*
//    Iteruodami per masyvą išspausdinkite eilutę, kurioje matytusi produkto pavadinimas ir tipas atskirti brūkšneliu:
//    Best chair - furniture, Ultimate lamp - lighting, Soft sofa - furniture
//    */
//
//}

//function exercise13(): void
//{
//    $products = getProducts();
//    $result = [];
//    foreach ($products as $key => $value){
//        $result[] = $products[$key]['type'] . ' - ';
//        $result[] = $products[$key]['name'] . ', ';
//    }
//        $string = implode('',$result);
//        $string = rtrim($string,', ');
//        print_r($string);
//}
//
//echo exercise13();
