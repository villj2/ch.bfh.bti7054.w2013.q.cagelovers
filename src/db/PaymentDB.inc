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
    
    public function getSpecificPayment($id){
        return $this->query("SELECT * FROM tb_payment WHERE ID = $id");
    }
    
    public function deletePayment($id){
        return $this->query("DELETE FROM tb_payment WHERE ID = $id");
    }
    
    public function insertPayment($orderID,$amount,$dateIssed,$method){
        return $this->query("INSERT INTO tb_payment(OrderID,Amount,DateIssed,method)
                                VALUES ('$orderID','$amount','$dateIssed','$method')");
    }
}

?>
