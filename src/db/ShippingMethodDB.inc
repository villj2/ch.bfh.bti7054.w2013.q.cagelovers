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
    public function getAllShippingMethods(){
        return $this->query("SELECT * FROM tb_shippingmethod");
    }


    public function insertShippingMethod($id,$description){
        return $this->query("INSERT INTO tb_shippingmethod(ID,Description)
                                VALUES ('$id','$description'");
    }
    
}

?>
