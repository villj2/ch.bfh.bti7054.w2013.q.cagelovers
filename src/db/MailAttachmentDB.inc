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
}

?>
