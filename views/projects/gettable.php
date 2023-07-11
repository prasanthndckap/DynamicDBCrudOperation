
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
<form action="/deletingdb" method="post" >
    <div class="gettable">
        <h2><?php echo $dbname ?></h2>
        <button type ="submit" class="dbname" id="dbname"  name="dbname"value="<?php echo $dbname ?>">click here to delete</button>
    </div>
</form>

<form action="/TableList" method="post" >
    <div class="dropdb">
<!--        <h2>--><?php //echo $dbname ?><!--</h2>-->
        <button type ="submit" class="dbname" id="btn"  name="dbname"value="<?php echo $dbname ?>">Get Table</button>
    </div>
</form>


</body>
</html>


