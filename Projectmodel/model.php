<?php

class database
{
    public $db;
    public function __construct(){
        try {
            $this->db= new PDO
            ("mysql:host=localhost;dbname=check_project",
                "admin",
                "welcome");


        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

class usermodels extends database{

    public function insertProject($project_name,$files)
    {
        $this->db->query("INSERT INTO projects (project_name	) values('$project_name')");
        $selected = $this->db->query("select * from projects order by id desc limit 1");
        $selected = $selected->fetch(PDO::FETCH_OBJ);
        var_dump($selected->id);
        $count = count($files['projectImage']['name']);
        for ($i = 0; $i < $count; $i++) {
            $imagePath = "Image/" . $files['projectImage']['name'][$i];/*db storage*/
            $imageName = $files['projectImage']['tmp_name'][$i];
            move_uploaded_file($imageName, $imagePath);
            $this->db->query("Insert into images (images,modelName,modelNo) values ('$imagePath','projects','$selected->id')");
        }

//        $imageName=$files['projectImage']['name'];
//        $imagePath="Image/".$imageName;/*db storage*/
//        move_uploaded_file($files["projectImage"]["tmp_name"],$imagePath);
//        $this->db->query("INSERT INTO projects (project_name,projectImages	) values('$project_name','$imagePath')");
    }


    public function GetAllProjects(){
        $GetProject = $this->db->query("SELECT * FROM projects");
        $datas = $GetProject->fetchALL(PDO::FETCH_OBJ);
        return $datas;
    }
    public function Gettasksinfo($id){
$getTasks = $this->db->query("SELECT * from tasks where id = '$id'");
        $datas = $getTasks->fetchALL(PDO::FETCH_OBJ);
        return $datas;
    }

    public function insertTask($taskName,$taskdescription,$projectid,$files){

//        var_dump($files);
        $imageName=$files['Image']['name'];
//        var_dump($imageName);
        $imagePath="Image/".$imageName;/*db storage*/
//var_dump($imagePath);
        move_uploaded_file($files["Image"]["tmp_name"],$imagePath);
        $this->db->query("INSERT INTO tasks (task_name,task_description,project_id,image) values('$taskName','$taskdescription','$projectid','$imagePath')");

    }


    public function Listoftasks($projectid){
        $tasklist = $this->db->query("select * from tasks where project_id = '$projectid' and deleted_at is null ");
        $datas =$tasklist->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }
    public function Deletetask($id){
 $removetask = $this->db->query("UPDATE tasks
SET deleted_at = now() WHERE id = $id;");
 $datas1=$removetask->fetchAll(PDO::FETCH_OBJ);
 return$datas1;
    }

    public function DeletedTasklist($id){
 $SelectDelTask =$this->db->query("Select * from tasks where deleted_at and  project_id = $id;");
$datas = $SelectDelTask->fetchAll(PDO::FETCH_OBJ);
return $datas;
    }

    public function countdeletedTask(){
        $countquery = $this->db->query("SELECT COUNT(id) FROM tasks WHERE deleted_at;");
        $count = $countquery->fetchAll(PDO::FETCH_OBJ);

        $arr=get_object_vars($count[0]);
        return $id=$arr["COUNT(id)"];
    }
}