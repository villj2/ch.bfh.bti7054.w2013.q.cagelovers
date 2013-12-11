<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MailAttachmentDB
 *
 * @author Daniel Inversini
 */
class MailAttachmentDB extends mysqli{
    //put your code here
    
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }

    
    
    public function getAllMailAttachments(){
        
         return $this->query("SELECT * FROM tb_mail_attachment");
    }
    
    public function getSpecificMailAttachment($id){
         return $this->query("SELECT * FROM tb_mail_attachment WHERE ID = $id");
    }
    
    public function deleteMailAttachment($id){
          $this->query("DELETE FROM tb_mail_attachment WHERE ID = $id");
    } 
    
    public function insertMailAttachment($mailID,$attachmentPath){
          $this->query("INSERT INTO tb_mail_attachment(MailID,AttachmentPath)
                                VALUES ('$mailID','$attachmentPath')");
    }
}

?>
