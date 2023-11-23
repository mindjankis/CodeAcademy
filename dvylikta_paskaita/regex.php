<?php
declare (strict_types=1);
//$orectordernumber='PN#54613';
//$matches=[];
//preg_match('/PN#\d+/',$orectordernumber, $matches);
//var_dump($matches);



//1. Parašykite funkciją, kuri pašalintų paskutinį žodį iš stringo
//"A car is standing in a parkinglot." --> "A car is standing in a"


//$string = 'A car is standing in a parkinglot.';
//$newString = preg_replace('/\b\w+\W\s*$/', '', $string);
//$newString=rtrim($newString,' ');
//var_dump($newString);



//2. Parašykite funkciją, kuri patikrintų, ar tekstas atitinka lietuviško mobilaus telefono numerio formatą
//"+37062345678" - true
//"+37012345678" - false
//"+3706234567" - false
//"+3706234567a" - false


//function checkPhoneNumber($number): bool {
//    if(preg_match('/^\+3706[0-9]{7}$/', $number)) {
//        return true;
//    }
//    return false;
//}
//var_dump(checkPhoneNumber("+37062345678"));

//3. Patobulinkite funkciją (2). Funkcija turėtų galėti patikrinti ir tokius telefono numerius:
//"+370 623 45678"
//"+370-623-45678"
//"+370-623 45678"
//"00370 623 45678"
//
//Jeigu telefono numeris validus, iš funkcijos turėtų grįžti tvarkingai suformatuotas telefono numeris:
//"+370-623 45678" --> "+37062345678"
//function checkPhoneNumber1 ($phonenumber): string
//{
//    $result = preg_replace('/\D+/', '', $phonenumber);
//    $result='+'.ltrim($result,'0');
//    if(preg_match('/^\+3706[0-9]{7}$/', $result)) {
//        return $result;
//    }
//    return 'Telefono Nr. nevalidus';
//
//}
//echo checkPhoneNumber1("+3706234567");

//4. Parašykite funkciją, kuri užmaskuotų dalį vartotojo duomenų. Pavardės ir gimimo metų simboliai
//turėtų būti pakeisti i simbolius 'X'.
//"John Smith, 1979 05 15" --> "John XXXXX, XXXX 05 15"
//function anonymizeString($inputString) {
//    //$anonymizedString = preg_replace('/ [a-zA-Z]+, /', ' XXXXX, ', $inputString); //Irgi veikia
//    $anonymizedString = preg_replace('/ \D+, /', ' XXXXX, ', $inputString);
//    $anonymizedString = preg_replace('/, [0-9]{4}/', ', XXXX', $anonymizedString);
//    return $anonymizedString;
//}
//$inputString = "John Sm-ith, 1979 05 09";
//$anonymizedResult = anonymizeString($inputString);
//echo $anonymizedResult;

//5. Parašykite funkciją, kuri pravaliduotų IPv4 adresą. IPv4 adresas yra sudarytas iš 4 skaičių, kurių kiekvienas gali
//būti nuo 0 iki 255. Skaičiai atskirti taškais.
//Pvz.:
//255.255.255.255
//1.1.0.1
//
//function isValidIPv4 ($ipAddress):string {
//    if (filter_var($ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false){
//        return $ipAddress.' is a valid IPv4 address.';
//    }
//    return $ipAddress.' is not a valid IPv4 address.';
//}
//echo isValidIPv4('1.1.0.1');

//function isValidIPv4($ipAddress) {
//    // Define a regular expression pattern for a valid IPv4 address
//    $pattern = '/^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
//
//    // Use preg_match to check if the string matches the pattern
//    return preg_match($pattern, $ipAddress) === 1;
//}
//
//// Example usage:
//$ipAddress = "192.168.1.1";
//
//if (isValidIPv4($ipAddress)) {
//    echo "$ipAddress is a valid IPv4 address.";
//} else {
//    echo "$ipAddress is not a valid IPv4 address.";
//}
