<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrderDB
 *
 * @author Daniel Inversini
 */
class OrderDB extends mysqli{
    //put your code here

    
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }
    
   public function getAllOrders()
   {
        return $this->query("SELECT * FROM tb_order");
   }
   public function getSpecificOrder($id){
        return $this->query("SELECT * FROM tb_order WHERE ID = $id");
   }

   public function deleteOrder($id){
         $this->query("DELETE FROM tb_order WHERE ID = $id");
   }
   
   /*
   public function insertOrder($userID,$status,$orderDate,$shippingDate,$shippingMethod,$shippingName1,$shippingName2,$shippingStreet,$shippingZIP,$shippingCountry)
   {
         $this->query("INSERT INTO tb_order(UserID,Status,OrderDate,ShippingDate,ShippingMethod,ShippingName1,ShippingName2,ShippingStreet,ShippingZIP,ShippingCountry)
                                VALUES ('$userID','$status','$orderDate','$shippingDate','$shippingMethod','$shippingName1','$shippingName','$shippingStreet','$shippingZIP','$shippingCountry')");
     
   }
    */
   public function insertOrder($userID,$orderDate,$shippingStreet,$shippingZIP,$shippingCity,$shippingCountry,$articleId,$modification,$amount,$paymethod)
   {
         $this->query("INSERT INTO tb_order(UserID,OrderDate,ShippingStreet,ShippingZIP,ShippingCity,ShippingCountry,ArticleId,Amount,Paymethod)
                        VALUES ('$userID','$orderDate','$shippingStreet','$shippingZIP','$shippingCity','$shippingCountry','$articleId','$amount','$paymethod')");
     
   }
}

?>
