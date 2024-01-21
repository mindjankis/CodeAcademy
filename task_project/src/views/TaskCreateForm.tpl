<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Create Form</title>
</head>
<body>
<h1>Task Create Form</h1>
<table style="border: 2px solid black">
    <tr>
        <th style="border: 1px solid black; width: 110px; background-color: aqua">Created_at</th>
        <th style="border: 1px solid black; width: 168px; background-color: aqua">Name</th>
        <th style="border: 1px solid black; width: 166px; background-color: aqua">Description</th>
        <th style="border: 1px solid black; width: 77px; background-color: aqua">Status</th>
</table>
<div>
    <form method="POST" action="/Mokymai/CodeAcademy/task_project/task/store">
        <input type="date" name="CREATED_AT" placeholder="Created_at">
        <input type="text" name="NAME" placeholder="Name">
        <input type="text" name="DESCRIPTION" placeholder="Description">
        <select name="STATUS">
            <option value="Done">Done</option>
            <option value="Not Done">Not Done</option>
            <option value="Urgent">Urgent</option>
        </select>
        <button type="submit">Create</button>
    </form>
</div>
</body>
</html>