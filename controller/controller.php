<?php

require 'Projectmodel/model.php';

class Usercontroller{
    private $Usermodel;
    public function __construct()
    {
        $this->Usermodel = new usermodels();
    }
    public function createProject($insertproject,$files){
        try {

            if($insertproject) {
                if ($insertproject['project_name'] != ""){
                    $this->Usermodel->insertProject($insertproject['project_name'],$files);
//                    header("location:/");
                }
                else{
                    echo "please enter the correct input name";
                }

            }
            else{
                require "views/projects/create.php";
            }

        }
        catch (PDOException $e){
            die($e->getMessage());

        }

    }
    public function gettingprojectid($id){
        $projectid =$id['projectid'];
        require "views/projects/createtask.php";

    }

    public function createingtasks($post,$files){
//        $files['image'];
//        var_dump($files);
         $this->Usermodel->insertTask($post['Task_name'],$post['Task_description'],$post['projectid'],$files);
         $this->getProjectinfo($post);
//        header('location:/');
}

    public function getProjectinfo($id)
    {
        $projectid =$id['projectid'];
        $TotalProject = $this->Usermodel->GetAllProjects();
        $Totaltasks = $this->Usermodel->Listoftasks($projectid);
        $countfun = $this->Usermodel->countdeletedTask();
        echo $countfun;
        require 'views/projects/index.php';

    }
        public function projectsList(){
            $TotalProject = $this->Usermodel->GetAllProjects();
            require "views/projects/index.php";
    }
    public function taskinfo($data){
        $taskid=$data['Task_id'];
        $Taskdetails = $this->Usermodel->Gettasksinfo($taskid);

        require "views/projects/taskinfo.php";

    }
    public function listedTask($pro_id){
        $pro_id = $pro_id['pro_id'];
        var_dump( $pro_id);
        $listedTask = $this->Usermodel->Listoftasks( $pro_id);
        $TotalProject = $this->Usermodel->GetAllProjects();
//        var_dump($listedTask);
require "views/projects/index.php";
    }

    public function deletingTask($id){

        $this->Usermodel->Deletetask($id['delete_id']);
        $this->getProjectinfo($id);

    }
    public function listofdeletedtasks($id)
    {

        $pro_id  = $id['pro_id'];
        $TotalProject = $this->Usermodel->GetAllProjects();
        $TotalDeltasks = $this->Usermodel->DeletedTasklist($pro_id);
        $countfun = $this->Usermodel->countdeletedTask();
        require 'views/projects/index.php';
    }


}

