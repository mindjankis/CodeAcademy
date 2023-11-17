<?php
declare (strict_types=1);
$venicles=file_get_contents('./venicles_database.json');
$decodeddatas=json_decode($venicles,true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<table style="border: 1px black solid">
    <tr>
        <th style="border: 1px black solid">Type</th>
        <th style="border: 1px black solid">Name</th>
        <th style="border: 1px black solid">Weight</th>
    </tr>
    <?php foreach ($decodeddatas as $decodeddata): ?>
        <tr>
            <td style="border: 1px black solid"><?= $decodeddata['type']; ?></td>
            <td style="border: 1px black solid"><?= $decodeddata['name']; ?></td>
            <td style="border: 1px black solid"><?= $decodeddata['weight']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>