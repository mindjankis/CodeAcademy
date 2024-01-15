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
}