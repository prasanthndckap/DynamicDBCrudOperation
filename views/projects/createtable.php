<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create project</title>
</head>
<body>

<form action="/tablecreated" method="post" enctype="multipart/form-data" >
    <h2>Create New table</h2>

    <label for="">Select the Database</label>
    <select name="db_name" id="db">
        <option value="">select</option>
        <?php foreach ($dblist as $getdb => $dbs):?>
        <option value="<?php echo $dbs->Database ?>"><?php echo $dbs->Database ?></option>
        <?php endforeach;?>
        <option value="mango">mango</option>
    </select>

    <select name="table_name" id="table">
        <option value="User">User</option>
        <option value="score">Score</option>
        <option value="marks">marks</option>
        <option value="projects">projects</option>
        <option value="education">education</option>
        <option value="attendence">attendence</option>
    </select>
</br>
    <input type="text"  id ="project" name ="ColumName">
    <select name="ColumType" id="table">

        <option value="int NOT null  AUTO_INCREMENT">int</option>
        <option value="varchar(255)">varchar(255)</option>
        <option value="timestamp">timestamp</option>
        <option value="text">text</option>
        <option value="date">date</option>
    </select>
    <button type ="submit">create</button>
</form>


</body>
</html>