<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StatusTypeDB
 *
 * @author Daniel Inversini
 */
class StatusTypeDB extends mysqli {
    //put your code here
    
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }

    
    
    public function getAllStatusTypes(){
        return  $this->query("SELECT * FROM tb_stautstype");
    }
    public function insertStatusType($id,$description,$descriptionDE,$descriptionFR,$descriptionEN,$descriptionIT,$active){
        
          $this->query("INSERT INTO tb_statustype(ID,Description,DescriptionDE,DescriptionFR,DescriptionEN,DescriptionIT,active)
                                VALUES('$id','$description','$descriptionDE','$descriptionFR','$descriptionEN','$descriptionIT',$active)");
    }
}

?>
