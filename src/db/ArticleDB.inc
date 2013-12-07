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
  
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include("$root/cagelovers/src/cfg/dbconfig.php");
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname);
        parent::select_db($dbname);
    }
    
    
    public function getAllArticles(){
         return $this->query("SELECT * FROM tb_article");
    }
    
    public function getSpecificArticle($id){
          return $this->query("SELECT * FROM tb_article WHERE ID = $id");
    }
    
    public function deleteArticle($id){
          $this->query("DELETE FROM tb_article WHERE ID = $id");
    }
    
    public function insertArticle($title,$description,$width,$height,$length,$weight,$price){
        $this->query("INSERT tb_article(Title,Description,Width,Height,Length,Weight,Price)
                        VALUES ('$title','$description','$width','$height','$length','$weight','$price')");
    }
    
    
    
}

?>
