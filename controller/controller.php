<?php

require 'models/model.php';

class Usercontroller
{
    private $Usermodel;

    public function __construct()
    {
        $this->Usermodel = new usermodels();

    }


    public function homepage()
    {
//        require " views/projects/createdb.php";
    }
    public function viewdb(){


        $alldb = $this->Usermodel->ListOfdb();
        var_dump($alldb);

        require "views/projects/createdb.php";
    }
//    public function deleteDatabase(){
//// asinged the fetch database function in the $dblist varible
//
//        $dblist = $this->Usermodel->ListOfdb();
//        require "views/projects/createdb.php";
//
//    }
    public function listdb(){
// asinged the fetch database function in the $dblist varible

           $dblist = $this->Usermodel->ListOfdb();
    require "views/projects/createtable.php";

    }

    public function  createtable($id){

//        var_dump($tablename);
//        var_dump($columname);
//        var_dump($coulumtype);
//        var_dump($usedb);
$this->Usermodel->createtable($id);
        require "views/projects/createtable.php";
    }

//    public function tablecreated()
//    {
//        require "views/projects/createtable.php";
//
//    }
}
