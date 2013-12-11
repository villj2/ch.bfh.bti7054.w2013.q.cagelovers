<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginHelper
 *
 * @author Daniel Inversini
 */
class LoginHelper {
    //put your code here
    
    private $mail;
    private $pw;
    private $hash;
    public function __construct($mail,$pw){
        $this->mail = $mail;
        $this->pw = $pw;        
        $this->init();
    }
    
    private function init(){
        //dont need this anymore
        $hash = md5($this->pw);       
        $this->hash = $hash;
        
        //echo phpinfo();
        
    }
    
    public function isAuth(){
        
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        include("$root/cagelovers/src/cfg/dbopen.php"); 
        
        $db = $conn->prepare("SELECT password FROM tb_user WHERE mail =?");
        $db->bind_param('s', trim($this->mail));
        $db->execute();
        
        $db->bind_result($dbPasswordHash);
        $db->fetch();
        
        include("$root/cagelovers/src/cfg/dbclose.php"); 
        
              
        if(trim($this->hash) == trim($dbPasswordHash))
        {
            return true;
        }
        else 
        {
            return false;
        }   
    }
}

?>
