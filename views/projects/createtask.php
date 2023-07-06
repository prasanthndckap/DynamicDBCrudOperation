<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create project</title>
</head>
<body>
<div class = "createtask">
<form action="/Addtask" method="post" enctype="multipart/form-data">
    <h2>Create Task</h2>
    <label for="project">Task name</label>
    <input type="text"  id ="project" name ="Task_name">
    <label for="project">Task description</label>
    <input type="text"  id ="project" name ="Task_description">
    <label for="project">uploadimage</label>
    <input type="file"  id ="project" name ="Image" multiple="multiple" required>
    <label for="project">project id</label>
    <input type="text"  id ="" name ="projectid" value="<?php echo $projectid ?>">
    <button type ="submit"> create</button>
</form>
</div>


</body>
</html>