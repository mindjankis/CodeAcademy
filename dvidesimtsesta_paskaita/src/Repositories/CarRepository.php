<?php
declare(strict_types=1);

namespace Mindaugas\DvidesimtsestaPaskaita\Repositories;

use Mindaugas\DvidesimtsestaPaskaita\Models\Car;
use PDO;

class CarRepository
{
    public function __construct(private PDO $connection)
    {

    }
    public function getlist():array
    {
        //$db=$container->get(\Mindaugas\DvidesimtsestaPaskaita\Framework\DbConnection::class);
        $statement=$this->connection->prepare('SELECT * FROM car');
        $statement->execute();
        $cars=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result=[];
        foreach ($cars as $car){
            $result[]=new Car(
                $car['registrationId'],
                $car['manufacturer'],
                $car['model'],
                $car['year']
            );

        }
        return $result;
    }
    public function findCarByRegistrationNumber(string $carRegistrationNumber): ?Car
    {
        $query = "SELECT * FROM car WHERE registrationId = :carRegistrationNumber;";
        $statement = $this->connection->prepare($query);
        $statement->execute(['carRegistrationNumber' => $carRegistrationNumber]);
        $car = $statement->fetchAll(PDO::FETCH_ASSOC);
        //dd($car);
        if($car!==[]){
        $carfinal=new Car(
                $car[0]['registrationId'],
                $car[0]['manufacturer'],
                $car[0]['model'],
                $car[0]['year']
            );
        return $carfinal;
        }
        else{return null;}
    }

    public function createCar(Car $car): bool
    {
        $query = "INSERT INTO car (registrationId, manufacturer, model, year)
                    VALUES (:registrationId, :manufacturer, :model, :year)";
        $statement = $this->connection->prepare($query);

        return $statement->execute([
            'registrationId' => $car->getRegistrationId(),
            'manufacturer' => $car->getManufacturer(),
            'model' => $car->getModel(),
            'year' => $car->getYear()
        ]);
    }
}