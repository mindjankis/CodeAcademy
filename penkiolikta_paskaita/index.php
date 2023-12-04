<?php
declare (strict_types=1);
require '.\connection_film_rental.php';
require '.\getactorsdata.php';
require '.\getactorsdata2.php';
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

<?php foreach ($datas as $key => $value): ?>
<table style="border: 2px solid black">
    <tr>
        <td style="border: 1px solid black; width: 50px;"><?php echo $value['id']; ?><br>
        </td>
        <td style="border: 1px solid black; width: 200px;"><?php echo $value['first_name']; ?><br>
        </td>
        <td style="border: 1px solid black; width: 200px;"><?php echo $value['last_name'] ?><br>
        </td>
        <td style="border: 1px solid black; width: 150px;"><?php echo $value['created_at'] ?><br>
        </td>
        <td style="border: 1px solid black; width: 150px;"><?php echo $value['updated_at'] ?><br>
        </td>
        <?php endforeach; ?>
    </tr>
</table>
<br>

<form style="display: inline-block; margin-right: 200px; margin-left: 250px" action="last_button.php" method="post">
    <button type="submit" name="last_button" value="<?php echo $limit . ' ' . $offset . ' ' . $numberofrows; ?>"><=
    </button>
</form>
<form style="display: inline-block;" action="next_button.php" method="post">
    <button type="submit" name="next_button" value="<?php echo $limit . ' ' . $offset . ' ' . $numberofrows; ?>">=>
    </button>
</form>
<br>
<br>

<div style="text-align:center; border: 5px solid red; height: 20px; width: 770px; background-color: red;">
    <b>Actor table search by name</b>
</div>
<table>
    <tr>
        <td>
            <form style="height: 60px; width: 778px; background-color: yellow;" method="post" action="search.php">
                <label for="option"><b>Choose search option:</b></label>
                <select id="option" name="option">
                    <option value="by_first_name">By First Name</option>
                    <option value="by_last_name">By Last Name</option>
                    <option value="by_first_or_last_name">By First OR Last Name</option>
                </select>
                <input type="radio" id="strict" name="strict" value="strict" checked>
                <label for="strict">Strict Search</label>
                <input type="radio" id="nonstrict" name="strict" value="nonstrict">
                <label for="nonstrict">Non Strict Search</label>
                <br><br>
                <label for="search_data"><b>Please enter actor name:</b></label>
                <input id="search_data" name="search_data" type="text">
                <button type="submit">Submit</button>
            </form>
        </td>
    </tr>
</table>

<table style="border: 2px solid black">
    <tr>
        <th style="border: 1px solid black; width: 50px; background-color: aqua">id</th>
        <th style="border: 1px solid black; width: 200px; background-color: aqua">first_name</th>
        <th style="border: 1px solid black; width: 200px; background-color: aqua">last_name</th>
        <th style="border: 1px solid black; width: 150px; background-color: aqua">created_at</th>
        <th style="border: 1px solid black; width: 150px; background-color: aqua">updated_at</th>
    </tr>
</table>
<?php foreach ($datas2 as $key => $value): ?>
<table style="border: 2px solid black">
    <tr>
        <td style="border: 1px solid black; width: 50px;"><?php echo $value['id']; ?><br>
        </td>
        <td style="border: 1px solid black; width: 200px;"><?php echo $value['first_name']; ?><br>
        </td>
        <td style="border: 1px solid black; width: 200px;"><?php echo $value['last_name'] ?><br>
        </td>
        <td style="border: 1px solid black; width: 150px;"><?php echo $value['created_at'] ?><br>
        </td>
        <td style="border: 1px solid black; width: 150px;"><?php echo $value['updated_at'] ?><br>
        </td>
        <?php endforeach; ?>
    </tr>
</table>

<?php
$namearray = [
    'search_data' => '',
    'option' => 'by_first_name',
    'strict' => 'strict'
];
file_put_contents('first_name.json', json_encode($namearray, JSON_PRETTY_PRINT));
?>

</body>
</html>