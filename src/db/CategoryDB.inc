<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryDB
 *
 * @author Daniel Inversini
 */
class CategoryDB extends mysqli{
    //put your code here
    
    public function getAllCategories(){
        return $this->query("SELECT * FROM tb_category");
    }
}

?>
