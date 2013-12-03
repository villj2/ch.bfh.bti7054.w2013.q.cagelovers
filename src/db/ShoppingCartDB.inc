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

    public function getAllShoppingCarts(){
        
        return $this->query("SELECT * FROM tb_shoppingcart");
    }
    
    public function getSpecificShoppingCart($id){
        return $this->query("SELECT * FROM tb_shoppingcart WHERE ID = $id");
    }
    
    public function deleteShoppingCart($id){
        return $this->query("DELETE FROM tb_shippingcart WHERE ID = $id");
    }
    
    public function insertShoppingCart($orderID,$articleID,$articleSubID,$count){
        return $this->query("INSERT INTO tb_shoppingcart(OrderID,ArticleID,ArticleSubID) 
                                VALUES ('$orderID','$articleID','$articleSubID','$count')");
    }
    
    
}

?>
