<?php
declare (strict_types=1);
if(file_exists('todo_database.json')){
    $todosarray=json_decode(file_get_contents('todo_database.json'),true);
    }
else{
    $todosarray=[];
    file_put_contents('todo_database.json',json_encode($todosarray,JSON_PRETTY_PRINT));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
            <form method="POST" action="submit.php">
                New TODO:<input name="todo" type="text">
                Due date:<input name="date" type="date" >
                Due time:<input name="time" type="time" >
            <button type="submit"> Submit</button>
            </form>
<br>
<table border="2">
    <tr>
        <th style="width: 300px;">TODOs</th>
        <th style="width: 300px;">Created at</th>
        <th style="width: 300px;">Due date</th>
    </tr>
</table>
<?php foreach ($todosarray as $key=>$value):?>
<table border="2">
    <tr>
        <td style="width: 300px;"><?php echo $value['todo'];?></td>
        <td style="width: 300px;"><?php echo $value['curent_date'];?></td>
        <td style="width: 300px;"><?php echo $value['date'].' '.$value['time']?></td>
        <td>
            <form action='delete.php' method='post'>
                <button type='submit' name='deleteBtn' value="<?php echo $key;?>">Delete</button>
            </form>
        </td>
        <?php endforeach;?>
    </tr>
</table>
</body>
</html>
