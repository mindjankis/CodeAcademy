<?php
declare (strict_types=1);
    $todosarray=json_decode(file_get_contents('todo_database.json'),true);
    $todolist=$_POST;
    $curentDate=new DateTime();
    $curentDate=$curentDate->format('Y-m-d H:i');
    $todolist['curent_date']=$curentDate;
    $todosarray[]=$todolist;
    file_put_contents('todo_database.json',json_encode($todosarray),JSON_PRETTY_PRINT);
header('Location: index.php');

