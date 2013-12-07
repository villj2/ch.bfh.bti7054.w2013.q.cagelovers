<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaymentMethodDB
 *
 * @author Daniel Inversini
 */
class PaymentMethodDB extends mysqli{
    //put your code here
    public function getAllPaymentMethods(){
        return $this->query("SELECT * FROM tb_paymentmethod");
    }
    public function insertPaymentMethod($id,$description){
        return $this->query("INSERT INTO tb_paymentmethod(ID,Description)
                                VALUES ('$id','$description'");
    }
}

?>
