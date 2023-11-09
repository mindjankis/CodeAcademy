<?php
declare (strict_types=1);

//1. Išspausdinkite šio momento datą pasinaudodami funkcija 'date'
//
//function exercise1(): void{
//    echo date('Y-m-d');
//}
//echo exercise1();

/*
2. Išspausdinkite datą '2008-12-15 15:15' pasinaudodami funkcija 'date'
*/
//function exercise2(): void{
//    echo date('2008-12-15 15:15');
//}
//exercise2();
//
///*
//3. Išspausdinkite šio momento datą skirtingais formatais, kurie atitiktų pavyzdžius:
//- 1970 Mar 1 15:15:00
//- 1970 Mar 01 15:15
//- 1970 Mar 1st 11:15:00 PM
//- 1970/3/1
//- savaites numeris (52 savaitės metuose)
//- dienos numeris (365 dienos metuose)
//*/
//function exercise3(): void
//{
//echo date('Y-M-j H:i:s').PHP_EOL;
//echo date('Y-M-d H:i').PHP_EOL;
//echo date('Y-M-jS h:i:s A').PHP_EOL;
//echo date('Y/n/j').PHP_EOL;
//echo date('W').PHP_EOL;
//echo date('z').PHP_EOL;
//}
//echo exercise3();

/*
//4. Sukurkite datos objektą iš šių tekstinių datų:
//- 2000-03-02 15:30:00
//- 2000/02/15 08:30:00 PM
//- 2000 March 2nd 15:30:00
*/
//function exercise4(): void
//{
//$date =new DateTime('2000-03-02 15:30:00');
//print_r($date->format('Y-m-d H:i:s'));echo PHP_EOL;
//$date =new DateTime('2000/02/15 08:30:00 PM');
//print_r($date->format('Y/m/d h:i:s A'));echo PHP_EOL;
//$temo='2000 March 2nd 15:30:00';
//$date =DateTime::createFromFormat('Y F jS H:i:s', $temo);
//print_r($date);
//
//}
//echo exercise4();
/*
5. Sukurkite datą iš '15th Jan 2021 8:15:01 PM' (data X). Pamodifikuokite, kad gautumėte:
- datą po 2 savaičių nuo datos X
- datą po 10 metų nuo datos X
- datą prieš 5 valandas nuo datos X
- paskutinę mėnesio dieną
- pirmą mėnesio dieną
- ateinantį antradienį
- datą prieš 1 dieną 8 valandas 15 minučių nuo datos X
*/

//function exercise5(): void{
//$date = new DateTime('15th Jan 2021 8:15:01 PM');
//print_r($date->format('dS M Y h:i:s A'));echo PHP_EOL;
//$date1=$date->modify('+2 weeks');
//print_r($date1->format('dS M Y h:i:s A'));echo PHP_EOL;
//$date2 =new DateTime('15th Jan 2021 8:15:01 PM');
//$date2=$date2->modify('+10 years');
//print_r($date2->format('dS M Y h:i:s A'));echo PHP_EOL;
//$date3 =new DateTime('15th Jan 2021 8:15:01 PM');
//$date3=$date3->modify('-5 hours');
//print_r($date3->format('dS M Y h:i:s A'));echo PHP_EOL;
//$date7 =new DateTime('15th Jan 2021 8:15:01 PM');
//$date7=$date7->modify('Last day of this month');
//print_r($date7->format('Y-m-d'));echo PHP_EOL;
//$date8 =new DateTime('15th Jan 2021 8:15:01 PM');
//$date8=$date8->modify('First day of this month');
//print_r($date8->format('Y-m-d'));echo PHP_EOL;
//$date9 =new DateTime('15th Jan 2021 8:15:01 PM');
//$date9=$date9->modify('Next Tuesday');
//print_r($date9->format('Y-m-d'));echo PHP_EOL;
//$date8 =new DateTime('15th Jan 2021 8:15:01 PM');
//$date7 =new DateTime('15th Jan 2021 8:15:01 PM');
//$date4=new DateTime();
//$date4=($date4->modify('first day of this month'));
//print_r($date4->format('d'));echo PHP_EOL;
//$date5=new DateTime();
//$date5=$date5->modify('next Tuesday');
//print_r($date5->format('d'));echo PHP_EOL;
//$date6=new DateTime('15th Jan 2021 8:15:01 PM');
//$date6=($date6->modify('-1 days, -8 hours, -15 minutes'));
//print_r($date6->format('dS M Y h:i:s A'));echo PHP_EOL;
//}
//exercise5();

//function exercise6(): void{
//    $products = [
//        [
//            'name' => 'Wine glass',
//            'last_purchase' => '2021 Jan 15 18:34:12',
//        ],
//        [
//            'name' => 'Bread knife',
//            'last_purchase' => '2020 Mar 15 23:14:00',
//        ],
//        [
//            'name' => 'Blue chair',
//            'last_purchase' => '2019 Dec 02 15:00:12',
//        ],
//    ];
//
//    /*
//    Išspausdinkite produktų paskutinių pirkimų santrauką:
//    Wine glass 2021-01-15 18:34:12
//    ...
//    */
//    foreach ($products as $product){
//        $temp=$product['last_purchase'];
//        $date= DateTime::createFromFormat('Y M d H:i:s', $temp);
//        print_r($product['name']); echo ' ';print_r($date ->format('Y-m-d H:i:s'));echo PHP_EOL;
//    }
//}
//exercise6();

//Skripto vykdymo trukmes matavimas
//$t = 0;
//$start = hrtime(true);
//for ($i = 0; $i < 10000000; $i++) {
//    $t++;
//}
//$end = hrtime(true);
//$duration = $end - $start;
//
//echo $duration / 1000000 . PHP_EOL;
//
//echo $t;

//function exercise7($date1, $date2): string{
//    if ($date1>$date2){
//        $temp='First date is newer';
//    }
//    else{$temp='Second date is newer';}
//    /*
//    Palyginkite datas ir grąžinkite atsakymą, kuri data naujesnė.
//
//    Funkcijos kvietimas: exercise7(date_create('2022-01-25 17:13:25'), date_create('2020-01-25 17:13:25'));
//    Rezultatas:
//    'First date is newer'
//
//    Funkcijos kvietimas: exercise7(date_create('2020-01-25 17:13:25'), date_create('2022-01-25 17:13:25'));
//    Rezultatas:
//    'Second date is newer'
//    */
//
//    return $temp;
//}
//echo exercise7(date_create('2022-01-25 17:13:25'), date_create('2020-01-25 17:13:25'));

//function exercise8($date): void{
//
//    /*
//    Išspausdinkite paduotos datos skirtumą nuo dabartinio momento žodžiais.
//
//    Funkcijos kvietimas: exercise8(date_create('2020-01-25 17:13:25'));
//    Rezultatas:
//    Supplied date was 891 days ago
//
//    Funkcijos kvietimas: exercise8(date_create('2024-01-25 17:13:25'));
//    Rezultatas:
//    Supplied date is in the future
//    */
//    $datenow=new DateTime();
//    if($date>$datenow){
//        echo 'Supplied date is in the future';
//    }
//    else {
//        $interval = $date->diff($datenow);
//        print_r($interval->format('%a days'));echo ' ago';
//    }
//
//}
//exercise8(date_create('2020-01-25 17:13:25'));echo PHP_EOL;
//exercise8(date_create('2024-01-25 17:13:25'));
//
//function exercise9($date): void
//{
//    /*
//    Išspausdinkite datų skirtumą žodžiais.
//
//    Funkcijos kvietimas: exercise9(date_create('2020-01-25 17:13:25'));
//    Rezultatas:
//    Supplied date was 2 years 1 months 11 days
//
//    Funkcijos kvietimas: exercise9(date_create('2024-01-25 17:13:25'));
//    Rezultatas:
//    Supplied date is in the future
//    */
//    $datenow=new DateTime();
//    if($date>$datenow){
//        echo 'Supplied date is in the future';
//    }
//    else {
//        $interval = $date->diff($datenow);
//        print_r($interval->format('%y years %m months %d days'));
//    }
//
//
//}
//exercise9(date_create('2020-01-25 17:13:25'));echo PHP_EOL;
//exercise9(date_create('2024-01-25 17:13:25'));

//function exercise10(): array
//{
//    $products = [
//        [
//            'name' => 'Wine glass',
//            'last_purchase' => '2023 Jan 15 18:34:12',
//        ],
//        [
//            'name' => 'Bread knife',
//            'last_purchase' => '2020 Mar 15 23:14:00',
//        ],
//        [
//            'name' => 'Blue chair',
//            'last_purchase' => '2019 Dec 12 15:00:12',
//        ],
//        [
//            'name' => 'Cutting board',
//            'last_purchase' => '2023 Feb 1 03:15:01',
//        ],
//    ];
//
//    /*
//    Grąžinkite iš funkcijos masyvą tik su tais produktais, kurie paskutinį kartą buvo pirkti einamaisiais metais.
//    Ši funkcija turėtų veikti ir bet kuriais ateinančiais metais (2023, 2024 ir t.t.)
//    */
//    $result=[];
//    $datenow=new DateTime();
//    $datenowyear=$datenow->format('Y');
//    $datenowyear=intval($datenowyear);
//foreach ($products as $product){
//    $temp=$product['last_purchase'];
//    $date= DateTime::createFromFormat('Y M d H:i:s', $temp);
//    $dateyear=$date->format('Y');
//    $dateyear=intval($dateyear);
//    if($datenowyear==$dateyear){
//        $result[]=$product;
//    }
//}
//    return $result;
//}
//print_r(exercise10());

//function exercise11(bool $showOnlyDays): void
//{
//    $products = [
//        [
//            'name' => 'Wine glass',
//            'last_purchase' => '2022 Jan 15 18:34:12',
//        ],
//        [
//            'name' => 'Bread knife',
//            'last_purchase' => '2020 Mar 15 23:14:00',
//        ],
//        [
//            'name' => 'Blue chair',
//            'last_purchase' => '2019 Dec 12 15:00:12',
//        ],
//        [
//            'name' => 'Cutting board',
//            'last_purchase' => '2022 Feb 1 03:15:01',
//        ],
//    ];
//
//    /*
//    Išspausdinkite paskutinių pirkimų santrauką. Jeigu $showOnlyDays yra true, tuomet rodykite tik dienas.
//
//    Funkcijos kvietimas: exercise11(false)
//    Rezultatas:
//    Last purchased:
//    Wine glass 0 years 1 month 23 days ago
//    ...
//
//    Funkcijos kvietimas: exercise11(true)
//    Rezultatas:
//    Last purchased:
//    Wine glass 51 days ago
//    ...
//    */
//    $datenow=new DateTime();
//    foreach ($products as $product) {
//        $temp = $product['last_purchase'];
//        $date = DateTime::createFromFormat('Y M d H:i:s', $temp);
//        if($showOnlyDays){
//            $interval=$datenow->diff($date);
//            print_r($product['name']); echo ' ';
//            print_r($interval->format('%a days ago'));echo PHP_EOL;
//        }
//            else{
//            $interval=$datenow->diff($date);
//            print_r($product['name']); echo ' ';
//            print_r($interval->format('%Y years %m month %d days ago')); echo PHP_EOL;
//            }
//
//
//
//    }
//}
//    exercise11(true);echo PHP_EOL;
//    exercise11(false);
//
//function exercise12(int $numberOfCycles): void
//{
//    /*
//    Išspausdinkite kiek laiko trunka prasukti tuščią ciklą nurodytą kiekį kartų ($numberOfCycles).
//    Trukmę apvalinkite iki milisekundžių.
//    Pridėkite parametrui $numberOfCycles numatytąją reikšmę 1000000.
//    */
//    $t = 0;
//$start = hrtime(true);
//for ($i = 0; $i < $numberOfCycles; $i++) {
//    $t++;
//}
//$end = hrtime(true);
//$duration = $end - $start;
//
//echo $duration / 1000000 . PHP_EOL;
//echo $t;
//}
//exercise12(1000000);