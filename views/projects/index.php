<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management</title>
    <link rel="stylesheet" href="views/projects/style.css">
    <link rel="stylesheet" href="style.css">
</head>

<form action="/getcolum" method="post" >
    <div class="tablelist">
        <input type="text"  id ="project" name ="dbname" value="<?php echo $dbname ?>" placeholder="Enter db name">

        <select name="table_name" id="db">
            <option value="">SelectTable</option>
            <?php foreach ($gettable as $getdb => $dbs):?>
                <option name="table_name" value="<?php echo $dbs->table_name ?>"><?php echo $dbs->table_name ?></option>
            <?php endforeach;?>
        </select>
        <button type ="submit" class="getbutton" id="dbname" >Get Colum</button>
    </div>
</form>


</body>
</html>
