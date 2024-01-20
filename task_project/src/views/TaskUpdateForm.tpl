<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Update Form</title>
</head>
<h1>Task Update Form</h1>
<body>

<table style="border: 2px solid black">
    <tr>
        <th style="border: 1px solid black; width: 165px; background-color: aqua">ID</th>
        <th style="border: 1px solid black; width: 112px; background-color: aqua">Created_at</th>
        <th style="border: 1px solid black; width: 169px; background-color: aqua">Name</th>
        <th style="border: 1px solid black; width: 169px; background-color: aqua">Description</th>
        <th style="border: 1px solid black; width: 77px; background-color: aqua">Status</th>
        <th style="border: 1px solid black; width: 50px; background-color: aqua">Active</th>
</table>
<div>
    <form method="POST" action="/Mokymai/CodeAcademy/task_project/task/update">
        <input type="text" name="ID" placeholder="Id">
        <input type="date" name="CREATED_AT" placeholder="Created_at">
        <input type="text" name="NAME" placeholder="Name">
        <input type="text" name="DESCRIPTION" placeholder="Description">
        <select name="STATUS">
            <option value="Done">Done</option>
            <option value="Not Done">Not Done</option>
            <option value="Urgent">Urgent</option>
        </select>
        <select name="ACTIVE">
            <option value=true>true</option>
            <option value=false>false</option>
        </select>
        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>