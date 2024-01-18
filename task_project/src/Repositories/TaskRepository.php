<?php
declare(strict_types=1);

namespace Mindaugas\TaskProject\Repositories;

use Mindaugas\TaskProject\Models\Task;
use PDO;

class TaskRepository
{
    public function __construct(private PDO $connection)
    {

    }
    public function getlist():array
    {
        $statement=$this->connection->prepare('SELECT * FROM task');
        $statement->execute();
        $tasks=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result=[];
        foreach ($tasks as $task){
            $result[]=new Task(
                $task['ID'],
                $task['CREATED_AT'],
                $task['UPDATED_AT'],
                $task['NAME'],
                $task['DESCRIPTION'],
                $task['STATUS'],
                $task['ACTIVE']
            );
        }
        //dump('result');
        //dd($result);
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