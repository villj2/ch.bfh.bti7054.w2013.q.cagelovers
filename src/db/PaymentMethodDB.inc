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
    
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }
    
    public function getAllPaymentMethods(){
          $this->query("SELECT * FROM tb_paymentmethod");
    }
    public function insertPaymentMethod($id,$description){
          $this->query("INSERT  tb_paymentmethod(ID,Description)
                                VALUES ('$id','$description')");
    }
}

?>
