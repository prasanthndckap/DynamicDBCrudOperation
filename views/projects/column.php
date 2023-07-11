<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>column Page</title>
    <link rel="stylesheet" href="views/projects/style.css">
    <link rel="stylesheet" href="style.css">
</head>

<form action="/addrow" method="post" >
    <div class="column">
        <input type="text"  id ="project" name ="dbname" value="<?php echo $dbname ?>" placeholder="Enter db name">
        <input type="text"  id ="project" name ="tablename" value="<?php echo $tablename ?>" placeholder="Enter db name">

        <select name="table_name" id="db">
            <option value="">Select Colum</option>
            <?php foreach ($Columlist as $getdb => $dbs):?>
                <option name="table_name" value="<?php echo $dbs->COLUMN_NAME ?>"><?php echo $dbs->COLUMN_NAME ?></option>
            <?php endforeach;?>
        </select>
        <button type ="submit" class="getbutton" id="getbutton" >Create Row</button>
    </div>
</form>


</body>
</html>
