<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleImagesDB
 *
 * @author Daniel Inversini
 */
class ArticleImagesDB extends mysqli{
    //put your code here
    
    public function getAllArticleImages(){
        
        return $this->query("SELECT * FROM tb_article_images ORDER BY ID ASC");
        
    }
    
    public function getArticleImagesByArticleID($articleID){
        return $this->query("SELECT * FROM tb_article_images WHERE ArticleID = $articleID");
    }
    
    public function insertArticleImage($articleID,$imagePath){
        return $this->query("INSERT INTO tb_article_images(ArticleID,ImagePath) 
                            VALUES ('$articleID','$imagePath'");
    }
    
}

?>
