<?php
declare (strict_types=1);
if(file_exists('file_database.json')){
    $filedataarray=json_decode(file_get_contents('file_database.json'),true);
    }
else{
    $filedataarray=[];
    file_put_contents('file_database.json',json_encode($filedataarray,JSON_PRETTY_PRINT));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failu tvarkykle</title>
</head>
<body>
<div style="text-align:left; border: 5px solid red; height: 55px; width: 705px; background-color: red;">
<span style="font-weight: bold; text-align: center;">Failu tvarkykle</span>
<table>
    <tr>
      <td>
      <form style="height: 30px; width: 700px; background-color: yellow;" method="post" action="submit.php" enctype="multipart/form-data">
<span style="font-weight: bold;"><label for="file_upload">Pasirinkite faila</label></span>
            <input id="file_upload" name="fileforupload" type="file">
            <button style="position: absolute; top: 34px; left: 600px;" type="submit">Upload</button>
      </form>
      </td>
    </tr>
</table>
</div>
<br>
<table style="border: 2px solid black">
    <tr>
      <th style="border: 1px solid black; width: 300px; background-color: aqua">File name</th>
      <th style="border: 1px solid black; width: 300px; background-color: aqua">File size in Bytes</th>
      <th style="border: 1px solid black; width: 300px; background-color: aqua">File_upload_date</th>
    </tr>
</table>

<?php foreach ($filedataarray as $key=>$value):?>
<table style="border: 2px solid black">
    <tr>
        <td style="border: 1px solid black; width: 300px;"><?php echo $value['name'];?><br>
        </td>
        <td style="border: 1px solid black; width: 300px;"><?php echo $value['size'];?><br>
        </td>
        <td style="border: 1px solid black; width: 300px;"><?php echo $value['fileuploaddate']?><br>
        </td>
        <td>
            <form action="delete.php" method="post">
                <button type="submit" name="deleteBtn" value="<?php echo $key;?>">Delete</button>
            </form>
        </td>
        <td>
            <form action="download.php" method="post">
                <button type="submit" name="downloadBtn" value="<?php echo $key;?>">Download</button>
            </form>
        </td>
        <?php endforeach;?>
    </tr>
</table>
</body>
</html>