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
    
    
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }
    public function getAllArticleCategories(){
         return $this->query("SELECT * FROM tb_article_category");
    }
    
    public function getSpecificArticleCategory($id){
         return $this->query("SELECT * FROM tb_article_category WHERE ID = $id");
    }
    
    public function deleteArticleCategory($id){
          $this->query("DELETE FROM tb_article_category WHERE ID = $id");
    }
    
    public function insertArticleCategory($articleID,$categoryID){
          $this->query("INSERT INTO tb_article_category(ArticleID,CategoryID)
                                VALUES('$articleID','$categoryID')");
    }
    
    public function getAllArticlesByCategory($categoryID){
          $this->query("SELECT * FROM tb_article_category WHERE CategoryID = $categoryID");
    }
    
    public function getAllCategoriesByArticle($articleID){
          $this->query("SELECT * FROM tb_article_category WHERE ArticleID = $articleID");
    }
    
}

?>
