<?php

/**
 * Description of Basket
 *
 * @author vill
 */
class Basket {
    
    public $items;
    
    function __construct() {
        global $items;
       
        $this->items = array();
    }
    
    public function addItem($item) {
        
        global $items;
        
        array_push($this->items, $item);
    }
    
    public function removeItem($item) {
    }
    
    public function getPrizeTotal() {
        
        global $items;
        
        $prizeTotal = 0;
        
        foreach ($this->items as &$value) {
            
            $prizeTotal += $value->prize;
        }
        
        return $prizeTotal;
    }
    
    public function hasItem($id) {
        
        $retval = false;
        
        foreach ($this->items as &$value) {
            
            if($value->id == $id) {
                
                $retval = true;
                break;
            }
        }
        
        return $retval;
    }
    
    public function getItemById($id) {
        
        $retval;
        
        foreach ($this->items as &$value) {
            
            if($value->id == $id) {
                
                $retval = $value;
                break;
            }
        }
        
        return $value;
    }
    
    public function updateItem($item) {
        
        // TODO update item
        foreach ($this->items as &$value) {
            
            if($value->id == $item->id) {
                
                $value = $item;
                break;
            }
        }
    }
}

?>
