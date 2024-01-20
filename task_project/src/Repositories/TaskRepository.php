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
        $query='SELECT * FROM task WHERE ACTIVE_B=true';
        $statement=$this->connection->prepare($query);
        $statement->execute();
        $tasks=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result=[];
        foreach ($tasks as $task) {
            $result[]=new Task(
                $task['ID'],
                $task['CREATED_AT'],
                $task['UPDATED_AT'],
                $task['NAME'],
                $task['DESCRIPTION'],
                $task['STATUS'],
                (bool) $task['ACTIVE_B']
            );
        }
        return $result;
    }

    public function createTask(Task $task): bool
    {
        $query = "INSERT INTO task (CREATED_AT, UPDATED_AT, NAME, DESCRIPTION, STATUS, ACTIVE_B)
                    VALUES (:CREATED_AT, :UPDATED_AT, :NAME, :DESCRIPTION, :STATUS, :ACTIVE_B)";
        //dd($query);
        $statement = $this->connection->prepare($query);
        return $statement->execute([
            'CREATED_AT' => $task->getCreatedAt(),
            'UPDATED_AT' => $task->getUpdatedAt(),
            'NAME' => $task->getName(),
            'DESCRIPTION' => $task->getDescription(),
            'STATUS' => $task->getStatus(),
            'ACTIVE_B' => $task->getActive()
        ]);
    }

    public function deleteTask(array $taskdata):bool
    {
        $result=$taskdata['deleteBtn'];
        $query ="UPDATE task SET ACTIVE_B = false WHERE ID =$result";
        //dd($query);
        $statement = $this->connection->prepare($query);
        return $statement->execute();
    }
}
