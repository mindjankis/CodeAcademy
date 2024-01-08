<?php
declare(strict_types=1);

/*

Sukurkite programą skirtą valdyti parkingą. Naudokite objektinį programavimą t.y. klases.
Turbūt pakaks dviejų klasių - Parking ir Car. Duomenys turi būti saugomi faile.
---------------------------------------------
php -f parking.php park_car NKA_123
Car ABC_123 parked!
---------------------------------------------
php -f parking.php park_car FTA_122
Car FTA_122 parked!
---------------------------------------------
php -f parking.php list_cars
Parked cars:
NKA_123
FTA_122

*/

class Parking
{
    public function park_car(car $car): void
    {
        $newarray = [
            'carId' => $car->getcarId(),
            'carNumber' => $car->getcarNumber(),
            'status' => 'parked'];
        if (file_exists('parking_database.json')) {
            $todosarray = json_decode(file_get_contents('parking_database.json'), true);
            $todosarray[] = $newarray;
            file_put_contents('parking_database.json', json_encode($todosarray, JSON_PRETTY_PRINT));
        } else {
            $todosarray[] = $newarray;
            file_put_contents('parking_database.json', json_encode($todosarray, JSON_PRETTY_PRINT));
        }
        echo 'Car' . ' ' . $newarray['carNumber'] . ' ' . 'parked!' . PHP_EOL;
    }

    public function list_cars(): void
    {
        if (file_exists('parking_database.json')) {
            $todosarray = json_decode(file_get_contents('parking_database.json'), true);
            echo 'Parked cars:' . PHP_EOL;
            foreach ($todosarray as $value) {
                echo $value['carNumber'] . PHP_EOL;
            }
        } else {
            echo 'Parking database is lost. Please contact your DEV';
        }
    }
}

class Car
{
    public function __construct(private int $carId, private string $carNumber)
    {
    }

    public function getcarId(): int
    {
        return $this->carId;
    }

    public function getcarNumber(): string
    {
        return $this->carNumber;
    }
}

$car1 = new Car(1, 'NKA_123');
$car2 = new Car(2, 'FTA_122');
$car3 = new Car(3, 'MEU_183');
$car4 = new Car(4, 'HZU_504');
$car5 = new Car(5, 'MBJ_289');
$parking = new Parking();
$parking->park_car($car1);
$parking->park_car($car2);
$parking->park_car($car3);
$parking->park_car($car4);
$parking->park_car($car5);
$parking->list_cars();
