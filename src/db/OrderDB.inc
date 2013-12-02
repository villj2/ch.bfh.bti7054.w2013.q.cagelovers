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
    
   public function getAllOrders()
   {
       return $this->query("SELECT * FROM tb_order");
   
   }
}

?>
