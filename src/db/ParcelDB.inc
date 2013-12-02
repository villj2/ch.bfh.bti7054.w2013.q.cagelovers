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
    
    public function getAllParcels(){
        
        return $this->query("SELECT * FROM tb_parcel");
    }
}

?>
