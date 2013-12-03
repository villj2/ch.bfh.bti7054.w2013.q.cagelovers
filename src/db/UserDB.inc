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
    
    //put your code here
    public function getAllUsers(){
        
        return $this->query("SELECT * FROM tb_user");
    }
    public function getSpecificUser($id){
        return $this->query("SELECT * FROM tb_user WHERE ID = $id");
    }
    
    public function deleteUser($id){
        return $this->query("DELETE FROM tb_user WHERE ID = $id");
    
    }
    
    public function insertUser($mail,$password,$name1,$name2,$street,$city,$zip,$country){
        return $this->query("INSERT INTO tb_user(mail,password,name1,name2,street,city,zip,country)
                                VALUES ('$mail','$password','$name1','$name2','$street','$city','$zip','$country'");

    }    
}

?>
