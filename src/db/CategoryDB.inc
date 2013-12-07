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
    
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }
    

    public function getAllCategories(){
         $this->query("SELECT * FROM tb_category");
    }
    
    public function getSpecificCategory($id){
         $this->query("SELECT * FROM tb_category WHERE ID = $id");
    }
    
    public function deleteCategory($id){
         $this->query("DELETE FROM tb_category WHERE ID = $id");        
    }
      
    
    
    public function insertCategory($descriptionDE,$descriptionFR,$descriptionIT,$descriptionEN,$parentID,$orderID){
        $this->query("INSERT tb_category (DescriptionDE,DescriptionFR,DescriptionIT,DescriptionEN,ParentID,OrderID)
                                VALUES ('$descriptionDE','$descriptionFR','$descriptionIT','$descriptionEN','$parentID','$orderID')");
        
       
                               
    }
}

?>
