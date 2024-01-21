<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car list Information</title>
</head>
<body>
<h1>All Cars List from Cars database</h1>

<table style="border: 2px solid black">
    <tr>
        <th style="border: 1px solid black; width: 150px; background-color: aqua">Registarion_ID</th>
        <th style="border: 1px solid black; width: 200px; background-color: aqua">Manufacturer</th>
        <th style="border: 1px solid black; width: 200px; background-color: aqua">Model</th>
        <th style="border: 1px solid black; width: 150px; background-color: aqua">Year</th>
</table>

{foreach $list as $car}
<table style="border: 2px solid black">
    <tr>
        <td style="border: 1px solid black; width: 150px;">{$car->getRegistrationId()}<br>
        </td>
        <td style="border: 1px solid black; width: 200px;">{$car->getManufacturer()}<br>
        </td>
        <td style="border: 1px solid black; width: 200px;">{$car->getModel()}<br>
        </td>
        <td style="border: 1px solid black; width: 150px;">{$car->getYear()}<br>
        </td>
        {/foreach}
    </tr>
</table>
<br>
</body>
</html>