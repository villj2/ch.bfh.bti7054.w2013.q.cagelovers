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
    public function getAllMailAttachments(){
        
        return $this->query("SELECT * FROM tb_mail_attachment");
    }
    
    public function getSpecificMailAttachment($id){
        return $this->query("SELECT * FROM tb_mail_attachment WHERE ID = $id");
    }
    
    public function deleteMailAttachment($id){
        return $this->query("DELETE FROM tb_mail_attachment WHERE ID = $id");
    } 
    
    public function insertMailAttachment($mailID,$attachmentPath){
        return $this->query("INSERT INTO tb_mail_attachment(MailID,AttachmentPath)
                                VALUES ('$mailID','$attachmentPath')");
    }
}

?>
