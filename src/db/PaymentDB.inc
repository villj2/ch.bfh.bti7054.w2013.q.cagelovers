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

    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }
    
    
    public function getAllPayments(){
          $this->query("SELECT * FROM tb_payment");
    }
    
    public function getSpecificPayment($id){
          $this->query("SELECT * FROM tb_payment WHERE ID = $id");
    }
    
    public function deletePayment($id){
          $this->query("DELETE FROM tb_payment WHERE ID = $id");
    }
    
    public function insertPayment($orderID,$amount,$dateIssed,$method){
          $this->query("INSERT INTO tb_payment(OrderID,Amount,DateIssed,method)
                                VALUES ('$orderID','$amount','$dateIssed','$method')");
    }
}

?>
