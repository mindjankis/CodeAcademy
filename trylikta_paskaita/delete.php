<?php
declare (strict_types=1);
$row_id=$_POST['deleteBtn'];
$filedatasarray=json_decode(file_get_contents('file_database.json'),true);
unlink($filedatasarray[$row_id]['filesavepath']);
unset($filedatasarray[$row_id]);
file_put_contents('file_database.json',json_encode($filedatasarray,JSON_PRETTY_PRINT));
header('Location: index.php');
