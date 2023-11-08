<?php
declare (strict_types=1);

//1. Išspausdinkite šio momento datą pasinaudodami funkcija 'date'
//
//function exercise1(): void{
//    echo(date('Y-m-d'));
//}
//echo exercise1();

/*
2. Išspausdinkite datą '2008-12-15 15:15' pasinaudodami funkcija 'date'
*/
//function exercise2(): void{
//    $date=new DateTime('2008-12-15 15:15');
//    print_r($date->format('Y-m-d H:i'));
//}
//echo exercise2();
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
//print_r($date->format('Y-F-jS H:i:s'));
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
//$date3=$date3->modify('+5 hours');
//print_r($date3->format('dS M Y h:i:s A'));echo PHP_EOL;
//echo (date('t'));echo PHP_EOL;
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