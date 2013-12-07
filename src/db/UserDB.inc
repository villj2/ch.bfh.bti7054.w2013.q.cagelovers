<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserDB
 *
 * @author Daniel Inversini
 */
class UserDB extends mysqli{
    
    
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }

    
    //put your code here
    public function getAllUsers(){
        
          $this->query("SELECT * FROM tb_user");
    }
    public function getSpecificUser($id){
          $this->query("SELECT * FROM tb_user WHERE ID = $id");
    }
    
    public function deleteUser($id){
          $this->query("DELETE FROM tb_user WHERE ID = $id");
    
    }
    
    public function insertUser($mail,$password,$name1,$name2,$street,$city,$zip,$country){
          $this->query("INSERT INTO tb_user(mail,password,name1,name2,street,city,zip,country)
                                VALUES ('$mail','$password','$name1','$name2','$street','$city','$zip','$country'");

    }    
}

?>
