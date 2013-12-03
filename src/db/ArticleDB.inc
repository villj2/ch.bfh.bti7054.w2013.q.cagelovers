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
    
    public function getSpecificArticle($id){
        return $this->query("SELECT * FROM tb_article WHERE ID = $id");
    }
    
    public function deleteArticle($id){
        return $this->query("DELETE FROM tb_article WHERE ID = $id");
    }
    
    public function insertArticle($title,$description,$width,$height,$length,$weight,$price){
        $this->query("INSERT INTO tb_article(Title,Description,Width,Height,Length,Weight,Price)
                        VALUES ('$title','$description','$width','$height','$length','$weight','$price'");
    }
    
    
    
}

?>
