<?php declare (strict_types=1);
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>

<div style="text-align:center; border: 5px solid red; height: 55px; width: 705px; background-color: red;">
<b>New TODO</b>
<table>
  <tbody>
    <tr>
      <td>
      <form style="height: 30px; width: 700px; background-color: yellow;" method="post" action="submit.php">
<span style="font-weight: bold;"><label for="todo">New TODO:</label></span><input id="todo" name="todo" type="text">
<span style="font-weight: bold;"><label for="date">Due date:</label></span><input id="date" name="date" type="date">
<span style="font-weight: bold;"><label for="time">Due time:</label></span><input id="time" name="time" type="time">
<button type="submit">Submit</button>
      </form>
      </td>
    </tr>
  </tbody>
</table>
</div>
<br>
<table style="border: 2px solid black">
    <tr>
      <th style="border: 1px solid black; width: 300px; background-color: aqua">TODOs</th>
      <th style="border: 1px solid black; width: 300px; background-color: aqua">Created at</th>
      <th style="border: 1px solid black; width: 300px; background-color: aqua">Due date</th>
    </tr>
</table>

<?php foreach ($todosarray as $key=>$value):?>
<table style="border: 2px solid black">
    <tr>
      <td style="border: 1px solid black; width: 300px;"><?php echo $value['todo'];?><br>
      </td>
      <td style="border: 1px solid black; width: 300px;"><?php echo $value['curent_date'];?><br>
      </td>
      <td style="border: 1px solid black; width: 300px;"><?php echo $value['date'].' '.$value['time']?><br>
      </td>
      <td>
      <form action="delete.php" method="post"> 
<button type="submit" name="deleteBtn" value="<?php echo $key;?>">Delete</button>
</form>
      </td>
<?php endforeach;?>
    </tr>
</table>
</body>
</html>