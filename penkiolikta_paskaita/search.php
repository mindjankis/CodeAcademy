<?php
declare (strict_types=1);
//var_dump($_POST);
$newarray=[
    'search_data'=>trim($_POST['search_data'])
];
file_put_contents('first_name.json',json_encode($newarray,JSON_PRETTY_PRINT));
//var_dump($newarray['search_data']);
header('Location: index.php');




