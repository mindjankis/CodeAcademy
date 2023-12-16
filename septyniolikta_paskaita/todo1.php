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

/*
Pridėkite papildomo funkcionalumo todo aplikacijai iš praeitos užduoties:
- filter_by_text - filtravimas pagal todo tekstą
------------------------------------------------------------------------
php -f todo.php search "auto"
****
id: 1
nuplauti automobili
2022-03-29 15:00
------------------------------------------------------------------------
- filter_by_date - filtravimas pagal datą. "gt" - greater than, "lt" - less than, "eq" - lygu.
Data gali būti paduodama tik vienu formatu - "YYYY-MM-DD". Jeigu data buvo paduota kitu formatu
arba jeigu ji apskritai nėra validi, grąžinti klaidos pranešimą.
------------------------------------------------------------------------
php -f todo.php filter_by_date "gt" "2022-01-01"
****
id: 1
nuplauti automobili
2022-03-29 15:00
------------------------------------------------------------------------
*/

class todo
{
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

    public function list(): void
    {
        if (file_exists('todo_database.json')) {
            $todosarray = json_decode(file_get_contents('todo_database.json'), true);
            foreach ($todosarray as $key => $value) {
                echo '****';
                echo PHP_EOL;
                echo 'id: ' . $key + 1;
                echo PHP_EOL;
                echo $value['task'];
                echo PHP_EOL;
                echo $value['date'];
                echo PHP_EOL;
            }
        } else {
            echo 'TODO list is empty';
        }
    }

    public function complete(int $key1): void
    {
        if (file_exists('todo_database.json')) {
            $todosarray = json_decode(file_get_contents('todo_database.json'), true);
            $todosarray[$key1 - 1]['status'] = 'completed';
            file_put_contents('todo_database.json', json_encode($todosarray, JSON_PRETTY_PRINT));
        } else {
            echo 'TODO list is empty';
        }
    }

    public function searchbytask(string $needle): void
    {
        $todosarray = json_decode(file_get_contents('todo_database.json'), true);
        foreach ($todosarray as $key => $value) {
            if (str_contains($todosarray[$key]['task'], $needle)) {
                echo '****';
                echo PHP_EOL;
                echo 'id: ' . $key + 1;
                echo PHP_EOL;
                echo $value['task'];
                echo PHP_EOL;
                echo $value['date'];
                echo PHP_EOL;
            }
        }

    }

    public function searchbydate(string $atrb, string $date): void
    {
        $checking = DateTime::createFromFormat('Y-m-d', $date);
        if ($checking === false) {
            echo 'Date format not valid!';
            die;
        }
        $todosarray = json_decode(file_get_contents('todo_database.json'), true);
        $date = new DateTime($date);
        //var_dump($date);
        foreach ($todosarray as $key => $value) {
            $date1 = new DateTime($value['date']);
            $date1 = new DateTime($date1->format('Y-m-d'));
            if ($date1 > $date && $atrb == 'gt') {
                echo '****';
                echo PHP_EOL;
                echo 'id: ' . $key + 1;
                echo PHP_EOL;
                echo $value['task'];
                echo PHP_EOL;
                echo $value['date'];
                echo PHP_EOL;
            }
            if ($date1 < $date && $atrb == 'lt') {
                echo '****';
                echo PHP_EOL;
                echo 'id: ' . $key + 1;
                echo PHP_EOL;
                echo $value['task'];
                echo PHP_EOL;
                echo $value['date'];
                echo PHP_EOL;
            }
            if ($date1 == $date && $atrb == 'eq') {
                echo '****';
                echo PHP_EOL;
                echo 'id: ' . $key + 1;
                echo PHP_EOL;
                echo $value['task'];
                echo PHP_EOL;
                echo $value['date'];
                echo PHP_EOL;
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
$obj->searchbydate('eq', '2022-03-29');




