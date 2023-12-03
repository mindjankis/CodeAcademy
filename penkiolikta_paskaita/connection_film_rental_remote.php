<?php
declare (strict_types=1);
$connection = new \PDO('mysql:host=sql307.hyperphp.com:3306;dbname=hp_35458120_film_rental',
    'hp_35458120','Labxxxxx1s',
    [\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION],);
$statement=$connection->prepare('SELECT*FROM actor LIMIT 10;');
$statement->execute();
$datas=$statement->fetchAll(\PDO::FETCH_ASSOC);
var_dump($datas);
