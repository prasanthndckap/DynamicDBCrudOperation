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
<div class="Createdb">
<form action="/createtable" method="post" enctype="multipart/form-data" >
    
    <h2>Create New database</h2>

    <input type="text"  id ="project" name ="db_name" placeholder="Enter db name">
    <button type ="submit"  class="infotn">create</button>
   
</form>

<form action="/listingdb" method="post" >
    <button type ="submit" class="infotn">listAlldb</button>
</form>
</div>

<div class="AlldbList">
    <?php foreach ($alldb as $getdb => $dbs):?>
    <form action="/deletedb" method="post" >
        <button type ="submit" class="getbutton" name="dbname"value="<?php echo $dbs->Database ?>"><?php echo $dbs->Database ?></button>
    </form>
    <?php endforeach;?>
</div>








<script src="/dropdb.js"></script>
</body>
</html>