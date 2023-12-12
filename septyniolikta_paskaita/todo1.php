<?php

declare(strict_types=1);

/*
Sukurkite paprastą todo aplikaciją. Naudokite objektinį programavimą. Aplikacija turi turėti 3 funkcijas:
- add - pridėti naują todo
- list - atvaizduoti visus todo
- complete - pažymėti kažkurį todo kaip padarytą. Padarytus todo galima arba trinti, arba pridėti požymį "completed"
Aplikacijos kvietimo pavyzdžiai:
------------------------------------------------------------------------
php -f todo.php add "nuplauti automobilų" "2022-03-29 15:00"
todo added!
------------------------------------------------------------------------
php -f todo.php list
****
id: 1
nuplauti automobili
2022-03-29 15:00
------------------------------------------------------------------------
php -f todo.php add "apsilankymas pas kirpeją" "2022-04-15 12:00"
todo added!
------------------------------------------------------------------------
php -f todo.php list
****
id: 1
nuplauti automobilų
2022-03-29 15:00
****
id: 2
apsilankymas pas kirpeją
2022-04-15 12:00
------------------------------------------------------------------------
php -f todo.php complete 1
todo completed!
------------------------------------------------------------------------
*/

class todo
{
    //private array $data=[];
//    public function __construct( private int $id, private string $task, private string $date)
//    {
//    }
    public function add(string $task, string $date): void
    {
            $newarray = [
            'task' => $task,
            'date' => $date,
            'status' => 'uncompleted'];
        if (file_exists('todo_database.json')) {
            $todosarray = json_decode(file_get_contents('todo_database.json'), true);
            $todosarray[] = $newarray;
            file_put_contents('todo_database.json', json_encode($todosarray, JSON_PRETTY_PRINT));
        } else {
            $todosarray[] = $newarray;
            file_put_contents('todo_database.json', json_encode($todosarray, JSON_PRETTY_PRINT));
        }
        echo 'todo added!';
    }
    public function list(): void{
        if (file_exists('todo_database.json')) {
            $todosarray = json_decode(file_get_contents('todo_database.json'), true);
            foreach ($todosarray as $key=>$value){
                echo '****'; echo PHP_EOL;
                echo 'id: '.$key+1; echo PHP_EOL;
                echo $value['task'];echo PHP_EOL;
                echo $value['date'];echo PHP_EOL;
            }
        } else {
            echo 'TODO list is empty';
        }
    }
    public function complete(int $key1): void{
        if (file_exists('todo_database.json')) {
            $todosarray = json_decode(file_get_contents('todo_database.json'), true);
            $todosarray[$key1-1]['status']='completed';
            file_put_contents('todo_database.json', json_encode($todosarray, JSON_PRETTY_PRINT));
        } else {
            echo 'TODO list is empty';
        }
    }
    public function searchbytask(string $needle):void{
        $todosarray = json_decode(file_get_contents('todo_database.json'), true);
        foreach ($todosarray as $key=>$value){
            if(str_contains($todosarray[$key]['task'],$needle)){
                echo '****'; echo PHP_EOL;
                echo 'id: '.$key+1; echo PHP_EOL;
                echo $value['task'];echo PHP_EOL;
                echo $value['date'];echo PHP_EOL;
            }
        }

    }
    public function searchbydate(string $atrb, string $date):void{
        $tikrinimas=DateTime::createFromFormat('Y-m-d',$date);
        if($tikrinimas===false){
            echo 'Date format not valit!';die;
        }
        $todosarray = json_decode(file_get_contents('todo_database.json'), true);
        $date=new DateTime($date);
        //var_dump($date);

        foreach ($todosarray as $key=>$value){
            $date1=new DateTime($value['date']);
            $date1=new DateTime($date1->format('Y-m-d'));
//            $interval=$date->diff($date1);
//            $interval=intval($interval->format('%d'));
            //var_dump($date1);
                if($date1>$date && $atrb=='gt'){
                    echo '****'; echo PHP_EOL;
                    echo 'id: '.$key+1; echo PHP_EOL;
                    echo $value['task'];echo PHP_EOL;
                    echo $value['date'];echo PHP_EOL;
                }
                if($date1<$date && $atrb=='lt'){
                    echo '****'; echo PHP_EOL;
                    echo 'id: '.$key+1; echo PHP_EOL;
                    echo $value['task'];echo PHP_EOL;
                    echo $value['date'];echo PHP_EOL;
                }
                if($date1==$date && $atrb=='eq'){
                    echo '****'; echo PHP_EOL;
                    echo 'id: '.$key+1; echo PHP_EOL;
                    echo $value['task'];echo PHP_EOL;
                    echo $value['date'];echo PHP_EOL;
                }
        }
    }
}

$obj = new todo();
//$obj->add('nuplauti automobili','2022-03-29 15:00');
//$obj->add('apsilankymas pas kirpeja','2022-04-15 12:00');
//$obj->list();
//$obj->complete(1);
//$obj->searchbytask('auto');
$obj->searchbydate('eq','2022-03-29');




