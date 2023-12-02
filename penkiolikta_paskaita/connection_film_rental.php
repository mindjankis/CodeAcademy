<?php
declare (strict_types=1);
$connection = new \PDO('mysql:host=localhost:3306;dbname=film_rental','root','',
    [\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION],);

