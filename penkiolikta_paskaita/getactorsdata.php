<?php
declare (strict_types=1);
require '.\connection_film_rental.php';
//$connection = new \PDO('mysql:host=localhost:3306;dbname=film_rental', 'root', '',
//    [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION],);
//$statement=$connection->prepare('SELECT * FROM actor LIMIT 10;');
//$statement->execute();
//$datas=$statement->fetchAll(\PDO::FETCH_ASSOC);

if (file_exists('next_button.json')) {
    $buttonarray = json_decode(file_get_contents('next_button.json'), true);
    $limit = $buttonarray['0'];
    $offset = $buttonarray['1'];
} else {
    $namearray = ['10', '0'];
    file_put_contents('next_button.json', json_encode($namearray, JSON_PRETTY_PRINT));
}

//$limit='10';
//$offset='0';
$statement = $connection->prepare('SELECT * FROM actor;');
$statement->execute();
$numberofrows = $statement->rowCount();
$query2 = 'SELECT * FROM actor LIMIT :limit OFFSET :offset;';
$statement = $connection->prepare($query2);
$statement->bindParam('limit',$limit,PDO::PARAM_INT);
$statement->bindParam('offset',$offset,PDO::PARAM_INT);
$statement->execute();
$datas = $statement->fetchAll(\PDO::FETCH_ASSOC);
?>