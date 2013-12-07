<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleCategoryDB
 *
 * @author Daniel Inversini
 */
class ArticleCategoryDB  extends mysqli{
    //put your code here
    
    public function getAllArticleCategories(){
        return $this->query("SELECT * FROM tb_article_category");
    }
    
    public function getSpecificArticleCategory($id){
        return $this->query("SELECT * FROM tb_article_category WHERE ID = $id");
    }
    
    public function deleteArticleCategory($id){
        return $this->query("DELETE FROM tb_article_category WHERE ID = $id");
    }
    
    public function insertArticleCategory($articleID,$categoryID){
        return $this->query("INSERT INTO tb_article_category(ArticleID,CategoryID)
                                VALUES('$articleID','$categoryID')");
    }
    
    public function getAllArticlesByCategory($categoryID){
        return $this->query("SELECT * FROM tb_article_category WHERE CategoryID = $categoryID");
    }
    
    public function getAllCategoriesByArticle($articleID){
        return $this->query("SELECT * FROM tb_article_category WHERE ArticleID = $articleID");
    }
    
}

?>
