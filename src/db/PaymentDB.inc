<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaymentDB
 *
 * @author Daniel Inversini
 */
class PaymentDB extends mysqli{
    //put your code here
    
    public function getAllPayments(){
        return $this->query("SELECT * FROM tb_payment");
    }
}

?>
