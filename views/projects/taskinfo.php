
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create project</title>
</head>
<body>
<?php foreach ($Taskdetails as $taskinfo):?>
    <form action="/delete" method="post">
        <div class="taskdetails">
            <h2> Name of the task : <?php echo $taskinfo->task_name ?></h2>
            <h3> description : <?php echo $taskinfo->task_description ?></h3>

            <div> <img class="image" src="<?php echo $taskinfo->image?>"></div>
            <button type="submit" name="delete_id" value="<?php echo $taskinfo->id?>">Delete</button>
    </form>
    </div>
<?php endforeach;?>


<div>
    <?php foreach ($listofdeletedtask as $Deltasks):?>
        <ul>
            <li><?php echo $Deltasks->task_name ?></li>
        </ul>
    <?php endforeach;?>
</div>

</body>
</html>


