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
    
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }

    
    
    public function getAllMailTypes(){
         return $this->query("SELECT * FROM tb_mailtype");
    }
    public function insertMailType($id,$description){
         return $this->query("INSERT INTO tb_mailtype(ID,Description)
                                VALUES( '$id','$description')");
    }
}

?>
