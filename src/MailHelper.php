<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MailHelper
 *
 * @author Daniel Inversini
 */

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require("$root/cagelovers/src/ext/PHPMailer/class.phpmailer.php");

class MailHelper {
    
    public $mail;
    
    function MailHelper(){
        
        $mail = new PHPMailer();  

        $mail->IsSMTP();  // telling the class to use SMTP
        $mail->Mailer = "smtp";
        $mail->Host = "ssl://smtp.gmail.com";
        $mail->Port = 465;
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->Username = "cagelovers@gmail.com"; // SMTP username
        $mail->Password = "cagelovers1"; // SMTP password 
        
        
        $mail->AddReplyTo("cagelovers@gmail.com");
        
        $this->mail = $mail;
    }


    public function sendMail($to,$subject,$body,$attachment)
    {
        $this->mail->From     = "cagelovers@gmail.com";
        
        $this->mail->AddAddress($to);  

        $this->mail->Subject  = $subject;
        $this->mail->Body     = $body;
        $this->mail->WordWrap = 50;  
        
        $this->mail->AddAttachment($attachment);

        //no echo for production
        if(!$this->mail->Send()) {
        //echo 'Message was not sent.';
        //echo 'Mailer error: ' . $mail->ErrorInfo;
        } else {
        //echo 'Message has been sent.';
        }
    }
    
    
}

?>
