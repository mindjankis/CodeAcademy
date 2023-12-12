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

class todo {
    //private array $data=[];
    public function __construct( private int $id, private string $task, private string $date)
    {
    }
    public function add():array{
       $newarray=['id'=>$this->id,
             'task'=>$this->task,
             'date'=>$this->date];
        if(file_exists('todo_database.json')){
            $todosarray=json_decode(file_get_contents('todo_database.json'),true);
            $todosarray[]=$newarray;
            file_put_contents('todo_database.json',json_encode($todosarray,JSON_PRETTY_PRINT));
        }
        else{
            $todosarray[]=$newarray;
            file_put_contents('todo_database.json',json_encode($todosarray,JSON_PRETTY_PRINT));
        }
       return $newarray;
    }
}

$obj=new todo(3,'labas rytas2', '2023-12-14');
print_r($obj->add());

//var_dump($obj);

