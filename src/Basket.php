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
}

?>
