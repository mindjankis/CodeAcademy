<?php
declare (strict_types=1);
//require '.\connection_film_rental.php';
$connection = new \PDO('mysql:host=sql307.hyperphp.com:3306;dbname=hp_35458120_film_rental',
    'hp_35458120','Labxxxxx1s',
    [\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION],);
//$statement=$connection->prepare('SELECT*FROM actor LIMIT 10;');
//$statement->execute();
//$datas=$statement->fetchAll(\PDO::FETCH_ASSOC);
if(file_exists('next_button.json')) {
    $buttonarray = json_decode(file_get_contents('next_button.json'), true);
    $limit = $buttonarray['0'];
    $offset= $buttonarray['1'];
}
else{
    $namearray=['10','0'];
    file_put_contents('next_button.json',json_encode($namearray,JSON_PRETTY_PRINT));
}
//$limit='10';
//$offset='0';
$statement=$connection->prepare('SELECT*FROM actor;');
$statement->execute();
$numberofrows=$statement->rowCount();
$query2='SELECT*FROM actor LIMIT '. $limit.' OFFSET '.$offset.';';
$statement=$connection->prepare($query2);
$statement->execute();
$datas=$statement->fetchAll(\PDO::FETCH_ASSOC);
//$limit='3';
//$query1='SELECT*FROM actor LIMIT :limit;';
//$statement=$connection->prepare($query1);
//$statement->bindParam('?',$limit,PDO::PARAM_STR);
//$statement->execute(['limit'=>$limit]);
//$datas=$statement->fetchAll(\PDO::FETCH_ASSOC);
if(file_exists('first_name.json')) {
    $namearray = json_decode(file_get_contents('first_name.json'), true);
    $first_name = $namearray['search_data'];
}
else{
    $namearray=['search_data'=>''];
    file_put_contents('first_name.json',json_encode($namearray,JSON_PRETTY_PRINT));
}
$query='SELECT*FROM actor WHERE first_name = ?;';
$statement=$connection->prepare($query);
$statement->execute([$first_name]);
$datas2=$statement->fetchAll(\PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actor atvaizdavimas</title>
</head>
<body>
<div style="text-align:center; border: 5px solid red; height: 20px; width: 770px; background-color: red;">
    <b>Actor atvaizdavimas</b>
</div>
<table style="border: 2px solid black">
    <tr>
      <th style="border: 1px solid black; width: 50px; background-color: aqua">id</th>
      <th style="border: 1px solid black; width: 200px; background-color: aqua">first_name</th>
      <th style="border: 1px solid black; width: 200px; background-color: aqua">last_name</th>
      <th style="border: 1px solid black; width: 150px; background-color: aqua">created_at</th>
      <th style="border: 1px solid black; width: 150px; background-color: aqua">updated_at</th>
    </tr>
</table>

<?php foreach ($datas as $key=>$value):?>
<table style="border: 2px solid black">
    <tr>
        <td style="border: 1px solid black; width: 50px;"><?php echo $value['id'];?><br>
        </td>
        <td style="border: 1px solid black; width: 200px;"><?php echo $value['first_name'];?><br>
        </td>
        <td style="border: 1px solid black; width: 200px;"><?php echo $value['last_name']?><br>
        </td>
        <td style="border: 1px solid black; width: 150px;"><?php echo $value['created_at']?><br>
        </td>
        <td style="border: 1px solid black; width: 150px;"><?php echo $value['updated_at']?><br>
        </td>
        <?php endforeach;?>
    </tr>
</table>
<br>
<form style="display: inline-block; margin-right: 200px; margin-left: 250px" action="last_button.php" method="post">
    <button type="submit" name="last_button" value="<?php echo $limit.' '.$offset.' '.$numberofrows;?>"><=</button>
</form>
<form style="display: inline-block;" action="next_button.php" method="post">
    <button type="submit" name="next_button" value="<?php echo $limit.' '.$offset.' '.$numberofrows;?>">=></button>
</form>
<br>
<br>
<div style="text-align:center; border: 5px solid red; height: 20px; width: 770px; background-color: red;">
    <b>Actor table search by name</b>
</div>
<table>
    <tr>
        <td>
            <form style="height: 30px; width: 778px; background-color: yellow;" method="post" action="search.php">
                <span style="font-weight: bold;"><label for="search_data">Please enter actor name:</label></span><input id="search_data" name="search_data" type="text">
                <button type="submit">Submit</button>
            </form>
        </td>
    </tr>
</table>
<?php

?>
<table style="border: 2px solid black">
    <tr>
        <th style="border: 1px solid black; width: 50px; background-color: aqua">id</th>
        <th style="border: 1px solid black; width: 200px; background-color: aqua">first_name</th>
        <th style="border: 1px solid black; width: 200px; background-color: aqua">last_name</th>
        <th style="border: 1px solid black; width: 150px; background-color: aqua">created_at</th>
        <th style="border: 1px solid black; width: 150px; background-color: aqua">updated_at</th>
    </tr>
</table>
<?php foreach ($datas2 as $key=>$value):?>
<table style="border: 2px solid black">
    <tr>
        <td style="border: 1px solid black; width: 50px;"><?php echo $value['id'];?><br>
        </td>
        <td style="border: 1px solid black; width: 200px;"><?php echo $value['first_name'];?><br>
        </td>
        <td style="border: 1px solid black; width: 200px;"><?php echo $value['last_name']?><br>
        </td>
        <td style="border: 1px solid black; width: 150px;"><?php echo $value['created_at']?><br>
        </td>
        <td style="border: 1px solid black; width: 150px;"><?php echo $value['updated_at']?><br>
        </td>
        <?php endforeach;?>
    </tr>
</table>
<?php
$namearray=['search_data'=>''];
file_put_contents('first_name.json',json_encode($namearray,JSON_PRETTY_PRINT));
?>
</body>
</html>