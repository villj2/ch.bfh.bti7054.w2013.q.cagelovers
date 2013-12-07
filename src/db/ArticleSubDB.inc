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
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }
    
    public function getAllArticleSub(){
          $this->query("SELECT * FROM tb_article_sub");
        
    }
    
    public function getSpecificArticleSub($id){
          $this->query("SELECT * FROM tb_article_sub WHERE ID = $id");
    }
    
    public function getArticleSubByArticleID($articleID){
          $this->query("SELECT * FROM tb_article_sub WHERE ArticleID = $articleID ORDER BY SortID ASC" );
    }
    
    public function insertArticleSub($articleID,$type,$value,$sortID){
          $this->query("INSERT INTO tb_article_sub(ArticleID,Type,Value,SortID)
                                VALUES ($articleID,'$type','$value',$sortID)");
       
    }
    
}

?>
