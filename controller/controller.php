<?php

require 'models/model.php';

class Usercontroller
{
    private $Usermodel;

    public function __construct()
    {
//        getting copy of user models class
        $this->Usermodel = new usermodels();

    }



    public function viewdb(){

//getting all database list  to show in the createdb page
        $alldb = $this->Usermodel->ListOfdb();


        require "views/projects/createdb.php";
    }
    public function createdb(){
// asinged the fetch database function in the $dblist varible

        require "views/projects/createdb.php";

    }
    public function deleteDatabase($id){
// asinged the fetch database function in the $dblist varible
        $dbname = $id['dbname'];
//        var_dump($dbname);




        require "views/projects/gettable.php";

    }
public function deleteingDatabase($name){
        $dbname = $name['dbname'];
//        var_dump($dbname);
    $this->Usermodel->dropdb($dbname);

    header('location:/listingdb');
}

    public function listdb(){

// asinged the fetch database function in the $dblist varible

           $dblist = $this->Usermodel->ListOfdb();
    require "views/projects/createtable.php";

    }

    public function  createtable($id)
    {
        if ($id) {
                        $dbname =$id['db_name'];
            $tablename=$id['table_name'];
//        var_dump($tablename);
//        var_dump($columname);
//        var_dump($coulumtype);
//        var_dump($usedb);
            $this->Usermodel->createtable($dbname,$tablename);
            $columname = $id['ColumName'];
            $datatype = $id['ColumType'];
//            var_dump($columname);
//            var_dump($datatype);
            $this->Usermodel->createColum($dbname,$tablename,$columname,$datatype);
            require "views/projects/createtable.php";
        }
    }
    public function getTable($name)
    {
       $dbname= $name['dbname'];
//        var_dump($dbname);

$gettable = $this->Usermodel->gettable($dbname);

//        var_dump($gettable);
        require "views/projects/index.php";

    }

    public function getColum($post){
        $dbname =$post['dbname'];
                  $tablename=$post['table_name'];

       $Columlist = $this->Usermodel->getColum($dbname,$tablename);
//       var_dump($Columlist);
        require "views/projects/column.php";
    }
    public function homepage()
    {
        require " views/projects/index.php";
    }
}
