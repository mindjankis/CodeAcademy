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
  <title>Title</title>
</head>
<body>
<table border="2">
  <tbody>
    <tr>
      <td>
      <form style="height: 39px; width: 700px; background-color: #5e8949" method="post" action="submit.php">
<span style="font-weight: bold;">New TODO:</span><input name="todo" type="text"> 
<span style="font-weight: bold;">Due date:</span><input name="date" type="date"> 
<span style="font-weight: bold;">Due time:</span><input name="time" type="time">
<button type="submit">Submit</button>
      </form>
      </td>
    </tr>
  </tbody>
</table>
<br>
<table border="2">
  <tbody>
    <tr>
      <th style="width: 300px; background-color: aqua">TODOs</th>
      <th style="width: 300px; background-color: aqua">Created at</th>
      <th style="width: 300px; background-color: aqua">Due date</th>
    </tr>
  </tbody>
</table>

<?php foreach ($todosarray as $key=>$value):?>
<table border="2">
  <tbody>
    <tr>
      <td style="width: 300px;"><?php echo $value['todo'];?><br>
      </td>
      <td style="width: 300px;"><?php echo $value['curent_date'];?><br>
      </td>
      <td style="width: 300px;"><?php echo $value['date'].' '.$value['time']?><br>
      </td>
      <td>
      <form action="delete.php" method="post"> 
<button type="submit" name="deleteBtn" value="<?php echo $key;?>">Delete</button>
</form>
      </td>
<?php endforeach;?>
    </tr>
</tbody>
</table>
</body>
</html>