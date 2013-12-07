<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShoppingCartDB
 *
 * @author Daniel Inversini
 */
class ShoppingCartDB extends mysqli{
    //put your code here
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }

    public function getAllShoppingCarts(){
        
          $this->query("SELECT * FROM tb_shoppingcart");
    }
    
    public function getSpecificShoppingCart($id){
          $this->query("SELECT * FROM tb_shoppingcart WHERE ID = $id");
    }
    
    public function deleteShoppingCart($id){
          $this->query("DELETE FROM tb_shippingcart WHERE ID = $id");
    }
    
    public function insertShoppingCart($orderID,$articleID,$articleSubID,$count){
          $this->query("INSERT INTO tb_shoppingcart(OrderID,ArticleID,ArticleSubID) 
                                VALUES ('$orderID','$articleID','$articleSubID','$count')");
    }
    
    
}

?>
