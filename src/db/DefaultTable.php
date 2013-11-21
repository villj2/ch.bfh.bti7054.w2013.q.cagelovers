<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DefaultTable
 *
 * @author Daniel Inversini
 */
class DefaultTable {
    //put your code here
    var $tablename;         
    var $dbname;            
    var $rows_per_page;     
    var $pageno;            
    var $lastpage;          
    var $fieldlist;         
    var $data_array;        
    var $errors;            
    
    //constructor
    //achtung, jede klasse braucht einen eigenen construcotr
    
    function Default_Table ()
    {
        //will cause errors
      $this->tablename       = 'default';
      $this->dbname          = 'default';
      $this->rows_per_page   = 10;

      $this->fieldlist = array('ID');
      $this->fieldlist['ID'] = array('pkey' => 'y'); //primary key
    }    

    function getData ($where)
    {
        $this->data_array = array();
        $pageno          = $this->pageno;
        $rows_per_page   = $this->rows_per_page;
        $this->numrows   = 0;
        $this->lastpage  = 0;
    }

}

?>
