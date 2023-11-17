<?php
declare (strict_types=1);

/*
Exercise 1

Parašykite PHP scriptą, kuris leistų modifikuoti tr. priemonių "duomenų bazę" (venicles_database.json).
Galite naudoti tą patį failą, su kuriuo dirbote užduotyse 5-7.
Operacijos, kurias mes norime atlikti su duomenimis:
- pridėti tr. priemonę į DB
- išspausdinti visas transporto priemones esančias duomenų bazėje (DB)
- išspausdinti vieną tr. priemonę, esančią DB, pagal jos ID
- ištrinti vieną tr. priemonę, esančią DB, pagal jos ID

CRUD - Create, Read, Update, Delete

######################################################################################

1.1 Sukurkite priemonės pridėjimo funkcionalumą.
Žingsniai:
- paimti is failo duomenis
- juos decodinti
- tuomet pridėti savo suvestą tr. priemonę
- vėl encodinti ir išsaugoti faile
php -f vehicles.php add

Add new vehicle
Vehicle name: Audi 80
Vehicle type: passenger car
Vehicle weight: 1290

Vehicle saved!

######################################################################################

1.2 Sukurkite visų tr. priemonių išvedimą.
php -f vehicles.php list

Vehicle list:
--------
id: 1
type: passenger car
name: Honda Civic
weight: 1550
--------
id: 2
type: airplane
name: Boeing 737
weight: 41410
--------
....

######################################################################################

1.3 Sukurkite vienos tr. priemonės išvedimą.
ID - yra masyvo nario raktas
Pvz: čia ID yra 0
Array
(
[0] => Array
(
[type] => passenger car
[name] => Honda Civic
[weight] => 1550
)
)

php -f vehicles.php show_one

Please enter ID of the vehicle:

#################

Pavyzdys #1:
php -f vehicles.php show_one

Please enter ID of the vehicle: 1

id: 1
type: passenger car
name: Honda Civic
weight: 1550

#################

Pavyzdys #2:
php -f vehicles.php show_one

Please enter ID of the vehicle: 999

Vehicle 999 does not exist!

######################################################################################

1.4 Sukurkite vienos tr. priemonės ištrynimą.
php -f vehicles.php delete_one

Please enter ID of the vehicle to delete:

#################

Pavyzdys #1:
php -f vehicles.php delete_one

Please enter ID of the vehicle to delete: 1

Vehicle 1 deleted!

#################

Pavyzdys #2:
php -f vehicles.php delete_one

Please enter ID of the vehicle to delete: 999

Vehicle 999 does not exist!

*/
echo'For modification file venicles_database.json you need to enter one of the following commands 
[CREATE, READ, UPDATE, DELETE or LIST]. Also you can enter first letter of comnands in UPPER_CASE'.PHP_EOL;

// Assume $action is the entered value (Create, Read, Update, Delete, or List)

$action = readline('Please enter modification command name:');


// You can change this value for testing

switch ($action) {
    case 'CREATE':
        createFunction();
        break;
    case 'C':
        createFunction();
        break;
    case 'READ':
        readFunction();
        break;
    case 'R':
        readFunction();
        break;
    case 'UPDATE':
        updateFunction();
        break;
    case 'U':
        updateFunction();
        break;
    case 'DELETE':
        deleteFunction();
        break;
    case 'D':
        deleteFunction();
        break;
    case 'LIST':
        listFunction();
        break;
    case 'L':
        listFunction();
        break;
    default:
        echo "Invalid action entered.";
}

// Functions corresponding to each action
function createFunction():void
{
    $newvenicle=[];
    $venicles=file_get_contents('venicles_database.json');
    $decodeddatas=json_decode($venicles,true);
    echo 'Add new vehicle'.PHP_EOL;
    $newVehiclename = readline('Venicle name:');
    $newVehicltype = readline('Venicle type:');
    $newVehiclweight = readline('Venicle weight:').PHP_EOL;
    $newvenicle['name']=$newVehiclename;
    $newvenicle['type']=$newVehicltype;
    $newvenicle['weight']=intval($newVehiclweight);
    $decodeddatas[]=$newvenicle;
    $venicles=json_encode($decodeddatas,JSON_PRETTY_PRINT);
    file_put_contents('venicles_database.json',$venicles);
    echo 'Vehicle saved!';

    // Your create logic here
}

function readFunction():void
{
    $venicles=file_get_contents('venicles_database.json');
    $decodeddatas=json_decode($venicles,true);
    $key=readline('Please enter ID of the vehicle:');
    if(array_key_exists($key,$decodeddatas)) {
        echo 'ID:' . ' ' . $key . PHP_EOL;
        foreach ($decodeddatas[$key] as $key1 => $decodeddata) {
            echo $key1 . ': ' . $decodeddata . PHP_EOL;
        }
    }
    else
        {
            echo 'Vehicle' . ' ' . $key . ' does not exist!';
        }


    // Your read logic here
}

function updateFunction():void
{
    $venicles=file_get_contents('venicles_database.json');
    $decodeddatas=json_decode($venicles,true);
    $key=readline('Please enter ID of the vehicle:');
    if(array_key_exists($key,$decodeddatas))
    {
        echo 'Update venicle data'.PHP_EOL;
        $newVehiclename = readline('Venicle name:');
        $newVehicletype = readline('Venicle type:');
        $newVehicleweight = readline('Venicle weight:').PHP_EOL;
        $decodeddatas[$key]['name']=$newVehiclename;
        $decodeddatas[$key]['type']=$newVehicletype;
        $decodeddatas[$key]['weight']=intval($newVehicleweight);
        $venicles=json_encode($decodeddatas,JSON_PRETTY_PRINT);
        file_put_contents('venicles_database.json',$venicles);
        echo 'Vehicle'.' '.$key.' updated!';
    }
    else
    {
        echo 'Vehicle' . ' ' . $key . ' does not exist!';
    }
    // Your update logic here
}

function deleteFunction():void
{
    $venicles=file_get_contents('venicles_database.json');
    $decodeddatas=json_decode($venicles,true);
    $key=readline('Please enter ID of the vehicle to delete:');
    if(array_key_exists($key,$decodeddatas))
    {
        unset($decodeddatas[$key]);
        $venicles=json_encode($decodeddatas,JSON_PRETTY_PRINT);
        file_put_contents('venicles_database.json',$venicles);
        echo 'Vehicle'.' '.$key.' deleted!';

    }
    else
    {
        echo 'Vehicle'.' '.$key.' does not exist!';
    }

    // Your delete logic here
}

function listFunction():void
{
    $venicles=file_get_contents('venicles_database.json');
    $decodeddatas=json_decode($venicles,true);
    foreach ($decodeddatas as $decodeddata){
        foreach ($decodeddata as $key => $value){
            if($key=="type") {
                echo '----------------' . PHP_EOL;
                echo $key . ' ' . $value.PHP_EOL;
            }
            echo $key . ' ' . $value.PHP_EOL;
        }
    }
}


