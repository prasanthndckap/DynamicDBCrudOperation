<?php

class database
{
    public $db;
    public function __construct(){
// get the input value to create  database
        $dbname = $_POST['db_name'];
//echo $dbname;

//        var_dump($dbname);
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

class usermodels extends database{

    public function  ListOfdb(){
//        fetch the all databases
        return $this->db->query("show databases")->fetchAll(PDO::FETCH_OBJ);
    }
    public function createtable($id){

        try {
//            $dbname =$table['dbname'];
//            $table_name=$table['Table_Name'];
            var_dump($id);
        $tablename= $id['table_name'];
//            $columname= $id['ColumName'];
//            $coulumtype= $id['ColumType'];
            $usedb= $id['db_name'];

            $query =("USE '$usedb';
            create table $tablename(
                `id` int not null AUTO_INCREMENT,
                primary key(`id`)
            );");

            $this->db->query($query);
            echo "created";
        }
        catch (PDOException $e){
            die($e->getMessage());
        }
//
//        $this->db->query("use ' $usedb';
//        CREATE TABLE $tablename(
//  `id` int(11)  NOT NULL AUTO_INCREMENT,
//
//  PRIMARY KEY (`id`)");
//        $result=mysqli_query($this->db, $tablename) or die(mysqli_error($this->db));
//
//        if($result){echo "table created";}else{echo "nop";}
//        }
//        catch (PDOException $e){
//            die($e->getMessage());
//        }



//        $table ="CREATE TABLE demotable(
//  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
//  `myName` varchar(11) DEFAULT NULL,
//  PRIMARY KEY (`id`)
//)";

//    }
}

//catch (PDOException $e){
//    die($e->getMessage());
}
