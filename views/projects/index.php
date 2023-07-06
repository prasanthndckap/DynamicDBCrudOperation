<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management</title>
    <link rel="stylesheet" href="views/projects/style.css">
</head>

<br>

    <!--<a href="./views/user/create.php"> create new one</a>-->



    <div class="projects">
    <table>
        <tr>
<!--            <th rowspan>id</th>-->
            <th>Projects</th>

        </tr>
        <?php foreach ($TotalProject as $index => $user):?>

            <tr>
                <div class="projectlist">
                <td>
                    <form action="/Project" method="post">
                        <img src="<?php echo $user->projectImages ?>" />
<!--                        <input type="button" name="" value="--><?php //echo $user->project_name?><!--">-->
                        <button type="submit" class="projectlist" name="projectid" value="<?php echo $user->id; ?>"><?php echo $user->project_name;?></button>
                    </form>
                </td>
                </div>
            </tr>
        <?php endforeach;?>


    </div> 
    <h2>Total deleted Task <?php echo $countfun; ?></h2>
<div class="btninfodiv">
<form action="/createProject" method="post">
    <button class="infotn" type ="submit" >Create new project</button>
</form>
      
            <form action="/createTask" method="post">
                <!--                <input type="text" name="productid" value="--><?php //echo $projectid ?><!--"  />-->
                <button type="submit" class="infotn"  name="projectid" value="<?php echo $projectid ?>" >CreateTask</button>
            </form>
    </div>   

<div class="tasklistbtn">
    <form action="/deletedprojects" method="post">
<!--                        <input type="text" name="pro_id" value="--><?php //echo $projectid ?><!--"  />-->
        <button type="submit"  class="infotn"  name="pro_id" value="<?php echo $projectid ?>" >deletedTask</button>
    </form> </br>
    <form action="/Tasklist" method="post">
<!--        <input type="text" name="pro_id" value="--><?php //echo $projectid ?><!--"  />-->
        <button type="submit" class="infotn" name="pro_id" value="<?php echo $projectid ?>" >taskList</button>
    </form>


    </table>

    </div>

    <?php foreach ($listedTask as $tasks):?>
    <form action="/taskinfo" method="post">
                        <input type="hidden" name="projectid" value="<?php echo $tasks->project_id ?>"  />

        <button type="submit" name="Task_id" value="<?php echo $tasks->id; ?>"><?php echo $tasks->task_name;?></button>

    </form>

    <?php endforeach;?>

    <?php foreach ($TotalDeltasks as $Deltasks):?>
        <ul>
            <li><?php echo $Deltasks->task_name ?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>
