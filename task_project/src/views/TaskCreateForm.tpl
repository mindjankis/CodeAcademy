<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task list Information</title>
</head>
<body>
<div>
    <a href="/Mokymai/CodeAcademy/task_project/list">List</a>
</div>
<br>
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
        <select name="ACTIVE">
            <option value="Delete">Delete</option>
            <option value="Leave">Leave</option>
        </select>
        <button type="submit">Create</button>
    </form>
</div>
</body>
</html>