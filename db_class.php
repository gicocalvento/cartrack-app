<?php
include_once('connection.php'); 
class Db_Class{
    private $table_name = 'car';

    function createUser(){
        $sql = "INSERT INTO PUBLIC.".$this->table_name."(brand_name,model,released_year) "."VALUES('".$this->cleanData($_POST['brand_name'])."','".$this->cleanData($_POST['model'])."')";

        return pg_affected_rows(pg_query($sql));
    }

    function getUsers(){             
        $sql ="select *from public." . $this->table_name . " ORDER BY id DESC";
        return pg_query($sql);
    } 

    function getUserById(){    
  
        $sql ="select *from public." . $this->table_name . "  where id='".$this->cleanData($_POST['id'])."'";
        return pg_query($sql);
    } 

    function deleteuser(){    
  
         $sql ="delete from public." . $this->table_name . "  where id='".$this->cleanData($_POST['id'])."'";
        return pg_query($sql);
    } 

    function updateUser($data=array()){       
     
        $sql = "update public.car set brand_name='".$this->cleanData($_POST['brand_name'])."',model='".$this->cleanData($_POST['model'])."', released_year='".$this->cleanData($_POST['released_year'])."' where id = '".$this->cleanData($_POST['id'])."' ";

        return pg_affected_rows(pg_query($sql));        
    }
    function cleanData($val){
         return pg_escape_string($val);
    }
?>