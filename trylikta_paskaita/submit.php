<?php
declare (strict_types=1);
//var_dump($_FILES);die;
//function filesave($filesavepath,$uploadedfilename,$tempfilepath):void{
//    //$uploadedfilename=$_FILES["fileforupload"]['name'];
//    $tempfilesavepath=$filesavepath . uniqid().' '.$uploadedfilename;
//    var_dump($tempfilesavepath);
//    var_dump($tempfilepath);die;
//    //$tempfilepath=$_FILES["fileforupload"]['tmp_name'];
//    move_uploaded_file($tempfilepath,$tempfilesavepath);
//}

$uploadedfiletype=trim($_FILES['fileforupload']['type']);
$uploadedfilename=trim($_FILES["fileforupload"]['name']);
$uploadedfilesize=$_FILES['fileforupload']['size'];
$filesavepath='./storage/' . uniqid().' '.$uploadedfilename;
$curentDate=new DateTime();
$curentDate=$curentDate->format('Y-m-d');
$tempfilepath=trim($_FILES["fileforupload"]['tmp_name']);
 if (!preg_match('/jpeg|png/',$uploadedfiletype)){
    echo 'File type error';die;}
    elseif ($uploadedfilesize>1024000) {
        echo 'File is bigger than 1MB';die;
    }
$filedataarray=json_decode(file_get_contents('file_database.json'),true);
$newarray=[];
$newarray=[
    'name'=>$uploadedfilename,
    'type'=>$uploadedfiletype,
    'size'=>$uploadedfilesize,
    'filesavepath'=>$filesavepath,
    'fileuploaddate'=>$curentDate
    ];
$filedataarray[]=$newarray;
//var_dump($filedataarray);
file_put_contents('file_database.json',json_encode($filedataarray,JSON_PRETTY_PRINT));
//filesave('./storage/','$_FILES["fileforupload"]["name"]','$_FILES["fileforupload"]["tmp_name"]');
move_uploaded_file($tempfilepath,$filesavepath);
header('Location: index.php');
