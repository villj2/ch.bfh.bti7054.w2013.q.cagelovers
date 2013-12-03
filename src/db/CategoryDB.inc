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
    
    public function getSpecificCategory($id){
        return $this->query("SELECT * FROM tb_category WHERE ID = $id");
    }
    
    public function deleteCategory($id){
        return $this->query("DELETE FROM tb_category WHERE ID = $id");        
    }
    
    public function insertCategory($descriptionDE,$descriptionFR,$descriptionIT,$descriptionEN,$parentID,$orderID){
        return $this->query("INSERT INTO tb_category(DescriptionDE,DescriptionFR,DescriptionIT,DescriptionEN,ParentID,OrderID)
                                VALUES('$descriptionDE','$descriptionFR','$descriptionIT','$descriptionEN','$parentID','$orderID')");
                               
    }
}

?>
