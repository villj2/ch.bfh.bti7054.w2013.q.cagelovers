<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleSubDB
 *
 * @author Daniel Inversini
 */
class ArticleSubDB extends mysqli{
    //put your code here
    
    public function getAllArticleSub(){
        return $this->query("SELECT * FROM tb_article_sub");
        
    }
    
    public function getSpecificArticleSub($id){
        return $this->query("SELECT * FROM tb_article_sub WHERE ID = $id");
    }
    
    public function getArticleSubByArticleID($articleID){
        return $this->query("SELECT * FROM tb_article_sub WHERE ArticleID = $articleID ORDER BY SortID ASC" );
    }
    
    public function insertArticleSub($articleID,$type,$value,$sortID){
        return $this->query("INSERT INTO tb_article_sub(ArticleID,Type,Value,SortID)
                                VALUES ($articleID,'$type','$value',$sortID)");
       
    }
    
}

?>
