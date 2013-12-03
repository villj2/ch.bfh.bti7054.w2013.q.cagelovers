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
    
    public function getAllMails(){
        
        return $this->query("SELECT * FROM tb_mail");
    }
    
    public function getSpecificMail($id){
        return $this->query("SELECT * FROM tb_mail WHERE ID = $id");
    }
    
    public function deleteMail($id){
        return $this->query("DELETE FROM tb_mail WHERE ID = $id");
    }
    
    public function insertMail($mailType,$mailTo,$mailCC,$mailBCC,$mailSubject,$mailBody,$mailSent,$mailSentTM){
        return $this->query("INSERT INTO tb_mail(mailType,mailTo,mailCC,mailBCC,mailSubject,mailBody,mailSent,mailSentTM)
                                VALUES ('$mailType','$mailTo','$mailCC','$mailBCC','$mailSubject','$mailBody','$mailSent','$mailSentTM')");
    }
}

?>
