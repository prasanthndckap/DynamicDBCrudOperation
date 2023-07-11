<?php

class database
{
    public $db;
    public function __construct(){
// get the input value  using postmethod to create  database
        $dbname = $_POST['db_name'];
//echo $dbname;


//if the database exites it will it will work automatically
//        if not it will create the new database and work
        try {
          $this->db= new PDO
//          checking the database is_exit
            ("mysql:host=localhost;dbname=$dbname",
                "admin",
                "welcome");
//            echo "connected";


        }
//        if the database is not exit it will create new database
        catch (PDOException $e) {
            echo $e->getMessage();
            $checkdb = $this->db= new PDO
            ("mysql:host=localhost;",
                "admin",
                "welcome");
            $createquery= "create database $dbname";
            $checkdb->query($createquery);
            $this->db= new PDO
            ("mysql:host=localhost;dbname=$dbname",
                "admin",
                "welcome");
            echo "connected";

        }




    }

}

class usermodels extends database
{

    public function ListOfdb()
    {
//        fetch the all databases

        return $this->db->query("show databases")->fetchAll(PDO::FETCH_OBJ);
    }

    public function createtable($dbname, $tablename)
    {

// creating table and inserting id into the table by selected database

        try {
            $this->db->query("
         USE $dbname;
        CREATE TABLE $tablename (
        id int auto_increment,
        primary key (id)
        )");

        } catch (PDOException $e) {

            echo "please enter the correct values";
            die($e->getMessage());
        }
    }



    public function createColum($dbname, $tablename, $columname, $datatype)
    {
//        counting the columname to get count the colum
        $count = count($columname);

//looping the counted values
        for($i=0;$i<$count;$i++){
            $this->db->query("
        USE $dbname;
        ALTER TABLE $tablename ADD COLUMN $columname[$i] $datatype[$i];
        ");
        }
    }

    public function dropdb($name){
//     getting the database name and drop the database using drop query
        $this->db->query("Drop database $name");
    }

public function gettable($dbname){

    //        selecting the all table from the selected database

return $this->db->query("SELECT table_name
FROM information_schema.tables
WHERE table_type='BASE TABLE'
      AND table_schema = '$dbname'")->fetchAll(PDO::FETCH_OBJ);

}

public function getColum($dbname,$tablename){

//        selecting the all columlist from the selected database and table

    return $this->db->query("SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='$dbname' 
    AND `TABLE_NAME`='$tablename'")->fetchAll(PDO::FETCH_OBJ);
}

}



