<?php
declare (strict_types=1);
$row_id=($_POST['deleteBtn']);
var_dump($row_id);
$todosarray=json_decode(file_get_contents('todo_database.json'),true);
unset($todosarray[$row_id]);
file_put_contents('todo_database.json',json_encode($todosarray),JSON_PRETTY_PRINT);
header('Location: index.php');
