<?php
declare (strict_types=1);
$temp=trim($_POST['last_button']);
$newarray=explode(' ',$temp);
//var_dump($newarray);die;
$numberofrows=intval($newarray['2']);
if(intval($newarray['1'])>0) {
    $newarray = ['0' => $newarray['0'], '1' => strval(intval($newarray['1']) - intval($newarray['0']))];
    //var_dump($newarray);die;
    file_put_contents('next_button.json', json_encode($newarray, JSON_PRETTY_PRINT));
    //echo 'true';
    header('Location: index.php');
}
else{header('Location: index.php');}