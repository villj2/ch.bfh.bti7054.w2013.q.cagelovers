<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MailTypeDB
 *
 * @author Daniel Inversini
 */
class MailTypeDB extends mysqli{
    //put your code here
    public function getAllMailTypes(){
        return $this->query("SELECT * FROM tb_mailtype");
    }
    public function insertMailType($id,$description){
        return $this->query("INSERT INTO tb_mailtype(ID,Description)
                                VALUES( '$id','$description')");
    }
}

?>
