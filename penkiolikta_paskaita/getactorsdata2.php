<?php
declare (strict_types=1);
if (file_exists('first_name.json')) {
    $namearray = json_decode(file_get_contents('first_name.json'), true);
    $first_name = $namearray['search_data'];
    $option = $namearray['option'];
    $strict = $namearray['strict'];
} else {
    $namearray = [
        'search_data' => '',
        'option' => 'by_first_name',
        'strict' => 'strict'
    ];
    file_put_contents('first_name.json', json_encode($namearray, JSON_PRETTY_PRINT));
}
if ($strict == 'strict') {
    if ($option == 'by_first_name') {
        $query = 'SELECT*FROM actor WHERE first_name = :first_name;';
        $statement = $connection->prepare($query);
        $statement->execute(['first_name' => $first_name]);
        $datas2 = $statement->fetchAll(\PDO::FETCH_ASSOC);
    } elseif ($option == 'by_first_or_last_name') {
        $query = 'SELECT*FROM actor WHERE first_name = :first_name OR last_name = :last_name;';
        $statement = $connection->prepare($query);
        $statement->execute(['first_name' => $first_name, 'last_name' => $first_name]);
        $datas2 = $statement->fetchAll(\PDO::FETCH_ASSOC);
    } else {
        $query = 'SELECT*FROM actor WHERE last_name = :first_name;';
        $statement = $connection->prepare($query);
        $statement->execute(['first_name' => $first_name]);
        $datas2 = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
} else {
    if ($option == 'by_first_name') {
        $query = 'SELECT*FROM actor WHERE first_name LIKE "%' . $first_name . '%"' . ';';
        //$query = 'SELECT*FROM actor WHERE first_name LIKE "'.':first_name'.'%"'.';';
        $statement = $connection->prepare($query);
        $statement->execute();
        //$statement->execute(['first_name'=>$first_name]);
        $datas2 = $statement->fetchAll(\PDO::FETCH_ASSOC);
    } elseif ($option == 'by_first_or_last_name') {
        $query = 'SELECT*FROM actor WHERE first_name LIKE ' . '"%' . $first_name . '%"' . 'OR last_name LIKE ' . '"%' . $first_name . '%"' . ';';
        $statement = $connection->prepare($query);
        $statement->execute();
        $datas2 = $statement->fetchAll(\PDO::FETCH_ASSOC);
    } else {
        $query = 'SELECT*FROM actor WHERE last_name LIKE "%' . $first_name . '%"' . ';';
        $statement = $connection->prepare($query);
        $statement->execute();
        $datas2 = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

}