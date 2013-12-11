<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParcelDB
 *
 * @author Daniel Inversini
 */
class ParcelDB extends mysqli {
    //put your code here
    
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }
    
    
    public function getAllParcels(){
        
         return $this->query("SELECT * FROM tb_parcel");
    }
    
    public function getSpecificParcel($id){
         return $this->query("SELECT * FROM tb_parcel WHERE ID = $id");
    }
    
    public function deleteParcel($id){
          $this->query("DELETE FROM tb_parcel WHERE ID = $id");
    }
    
    public function insertParcel($orderID,$Barcode,$weight){
          $this->query("INSERT INTO tb_parcel(orderID,Barcode,weight)
                                VALUES ('$orderID','$Barcode','$weight'");
    }
}

?>
