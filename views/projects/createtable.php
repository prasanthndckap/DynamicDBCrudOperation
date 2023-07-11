<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="main">
<form action="/tablecreated" method="post" enctype="multipart/form-data" >
    <h2>Create New table</h2>
<div class="tablediv">
    <label for="">Select the Database</label>
    <select name="db_name" id="db">
        <option value="">selectDB</option>
        <?php foreach ($dblist as $getdb => $dbs):?>
        <option value="<?php echo $dbs->Database ?>"><?php echo $dbs->Database ?></option>
        <?php endforeach;?>

    </select>
        </br>
    <label for="">Select the tablename</label>
    <select name="table_name" id="table">
    <option value="">selectTable</option>
        <option value="User">User</option>
        <option value="score">Score</option>
        <option value="marks">marks</option>
        <option value="projects">projects</option>
        <option value="education">education</option>
        <option value="attendence">attendence</option>
    </select>
</br>
<div class="coulmdiv" id="coulmdiv">
    <input type="text" class="columnname" id ="project" name ="ColumName[]" placeholder="enter colum name" >
    <select name="ColumType[]" id="columtype">
    <option value="">selectDataType</option>
        <option value="int NOT null  AUTO_INCREMENT">int</option>
        <option value="varchar(255)">varchar(255)</option>
        <option value="timestamp">timestamp</option>
        <option value="text">text</option>
        <option value="date">date</option>
    </select>
</div>
</div>
<div class="btn">
    <button type="button" class="addtable" id="addcolum">Add More</button>
    <button type ="submit"  class="addtable">create</button>
</form>
</div>
<form action="/createdb" method="post" >
    <h2>Create New Database</h2>
    <button type ="submit" class="makedb">Add New DB</button>
</form>
</div>



<script src="index.js"></script>
</body>
</html>