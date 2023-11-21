<?php
declare (strict_types=1);
    $todosarray=json_decode(file_get_contents('todo_database.json'),true);
    //var_dump($_POST);
    $curentDate=new DateTime();
    $curentDate=$curentDate->format('Y-m-d H:i');
    $newarray=[];
    $newarray=[
        'todo'=>trim($_POST['todo']),
        'date'=>trim($_POST['date']),
        'time'=>trim($_POST['time']),
        'curent_date'=>$curentDate
    ];
    var_dump($newarray);
    $todosarray[]=$newarray;
    file_put_contents('todo_database.json',json_encode($todosarray,JSON_PRETTY_PRINT));
header('Location: index.php');

