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
}

?>
