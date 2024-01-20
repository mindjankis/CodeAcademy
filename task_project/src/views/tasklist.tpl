<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task list Information</title>
</head>
<body>
<h1>All Tasks List from Tasks database</h1>

<div>
    <h2><a href="/Mokymai/CodeAcademy/task_project/">Home page</a></h2>
</div>

<table style="border: 2px solid black">
    <tr>
        <th style="border: 1px solid black; width: 50px; background-color: aqua">ID</th>
        <th style="border: 1px solid black; width: 100px; background-color: aqua">Created_at</th>
        <th style="border: 1px solid black; width: 100px; background-color: aqua">Updated_at</th>
        <th style="border: 1px solid black; width: 200px; background-color: aqua">Name</th>
        <th style="border: 1px solid black; width: 400px; background-color: aqua">Description</th>
        <th style="border: 1px solid black; width: 150px; background-color: aqua">Status</th>
        <th style="border: 1px solid black; width: 150px; background-color: aqua">Active</th>
</table>

{foreach $list as $task}
<table style="border: 2px solid black">
    <tr>
        <td style="border: 1px solid black; width: 50px;">{$task->getId()}<br>
        </td>
        <td style="border: 1px solid black; width: 100px;">{$task->getCreatedAt()}<br>
        </td>
        <td style="border: 1px solid black; width: 100px;">{$task->getUpdatedAt()}<br>
        </td>
        <td style="border: 1px solid black; width: 200px;">{$task->getName()}<br>
        </td>
        <td style="border: 1px solid black; width: 400px;">{$task->getDescription()}<br>
        </td>
        <td style="border: 1px solid black; width: 150px;">{$task->getStatus()}<br>
        </td>
        <td style="border: 1px solid black; width: 150px;">{$task->getActive()}<br>
        </td>
        <td>
            <form action="/Mokymai/CodeAcademy/task_project/task/delete" method="post">
                <button type="submit" name="deleteBtn" value={$task->getId()}>Delete</button>
            </form>
        </td>
        {/foreach}
    </tr>
</table>
<br>
</body>
</html>