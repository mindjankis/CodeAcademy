<?php
declare (strict_types=1);
//var_dump($_POST);
$temp=trim($_POST['next_button']);
$newarray=explode(' ',$temp);
$numberofrows=intval($newarray['2']);
if(intval($newarray['1'])<($numberofrows-intval($newarray['0']))) {
    $newarray = ['0' => $newarray['0'], '1' => strval(intval($newarray['1']) + intval($newarray['0']))];
    file_put_contents('next_button.json', json_encode($newarray, JSON_PRETTY_PRINT));
    //echo 'true';
    header('Location: index.php');
}
else{header('Location: index.php');}
