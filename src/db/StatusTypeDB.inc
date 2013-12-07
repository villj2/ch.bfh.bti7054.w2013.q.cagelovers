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
    public function getAllStatusTypes(){
        return $this->query("SELECT * FROM tb_stautstype");
    }
    public function insertStatusType($id,$description,$descriptionDE,$descriptionFR,$descriptionEN,$descriptionIT,$active){
        
        return $this->query("INSERT INTO tb_statustype(ID,Description,DescriptionDE,DescriptionFR,DescriptionEN,DescriptionIT,active)
                                VALUES('$id','$description','$descriptionDE','$descriptionFR','$descriptionEN','$descriptionIT',$active)");
    }
}

?>
