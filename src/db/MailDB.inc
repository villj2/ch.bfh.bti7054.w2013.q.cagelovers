<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MailDB
 *
 * @author Daniel Inversini
 */
class MailDB extends mysqli {
    //put your code here

    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }
    
    
    public function getAllMails(){
        
          $this->query("SELECT * FROM tb_mail");
    }
    
    public function getSpecificMail($id){
          $this->query("SELECT * FROM tb_mail WHERE ID = $id");
    }
    
    public function deleteMail($id){
          $this->query("DELETE FROM tb_mail WHERE ID = $id");
    }
    
    public function insertMail($mailType,$mailTo,$mailCC,$mailBCC,$mailSubject,$mailBody,$mailSent,$mailSentTM){
          $this->query("INSERT INTO tb_mail(mailType,mailTo,mailCC,mailBCC,mailSubject,mailBody,mailSent,mailSentTM)
                                VALUES ('$mailType','$mailTo','$mailCC','$mailBCC','$mailSubject','$mailBody','$mailSent','$mailSentTM')");
    }
}

?>
