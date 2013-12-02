<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleDB
 *
 * @author Daniel Inversini
 */
class ArticleDB extends mysqli  {
    //put your code here
  
    public function getAllArticles(){
        return $this->query("SELECT * FROM tb_article");
    }
    
    
    
    
    
    
}

?>
