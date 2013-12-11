<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShippingMethodDB
 *
 * @author Daniel Inversini
 */
class ShippingMethodDB extends mysqli{
    //put your code here
    
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }

    
    public function getAllShippingMethods(){
         return $this->query("SELECT * FROM tb_shippingmethod");
    }


    public function insertShippingMethod($id,$description){
          $this->query("INSERT tb_shippingmethod(ID,Description)
                                VALUES ('$id','$description')");
    }
    
}

?>
