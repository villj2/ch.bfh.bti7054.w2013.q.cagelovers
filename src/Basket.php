<?php

include("$root/cagelovers/src/cfg/dbconfig.php");
include("$root/cagelovers/src/db/OrderDB.inc");
include("$root/cagelovers/src/cfg/dbopen.php");

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
    
    public function removeItem($itemId) {
        
        $i = 0;
        foreach ($this->items as &$value) {
            
            if($value->id == $itemId) {
                
                unset($this->items[$i]);
                $this->items = array_values($this->items);
            }
            
            $i++;
        }
    }
    
    public function getPrizeTotal() {
        
        global $items;
        
        $prizeTotal = 0;
        
        foreach ($this->items as &$value) {
            
            $prizeTotal += $value->prize * $value->amount;
        }
        
        return $prizeTotal;
    }
    
    public function hasItem($id) {
        
        $retval = false;
        
        if(count($this->items) > 0) {
        
            foreach ($this->items as &$value) {

                if($value->id == $id) {

                    $retval = true;
                    break;
                }
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
        
        foreach ($this->items as &$value) {
            
            if($value->id == $item->id) {
                
                $value = $item;
                break;
            }
        }
    }
    
    public function makeOrder($paymethod) {
        
        $user = unserialize($_SESSION['user']);
        
        $order = new OrderDB();
        
        foreach ($this->items as &$value) {
            $order = $order->insertOrder($user->id,getdate(),$user->street,$user->zip,$user->country,$value->id,$value->modification,$value->amount,$paymethod);
        }
        
        // FIXME fetch? insert?
        $order = $order->fetch_object();
    }
}

?>
