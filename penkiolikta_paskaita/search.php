<?php
declare (strict_types=1);
//var_dump($_POST);die;
$temp = $_POST;
$temp1 = trim($temp['search_data']);
if (preg_match('/[a-zA-Z]+/', $temp1)) {
    $newarray = [
        'search_data' => $temp1,
        'option' => trim($temp['option']),
        'strict' => trim($temp['strict'])
    ];
} else {
    echo 'You can enter only letters';
    die;
}
file_put_contents('first_name.json', json_encode($newarray, JSON_PRETTY_PRINT));
//var_dump($newarray['search_data']);
header('Location: index.php');




