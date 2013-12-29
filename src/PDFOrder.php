<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PDFOrder
 *
 * @author Daniel Inversini
 */
class PDFOrder extends PDFGeneric{
    //put your code here
    public $orderID;
    
    public function __construct($orderID) {
        $this->orderID = $orderID;
        init();
    }
    
    function init(){
        $pdf = new PDFGeneric();
        
        $pdf->headerFontName = 'Arial';
        $pdf->headerFontSize = 20;
        $pdf->headerFontStyle = 'B';
        $pdf->headerStartX = 10;
        $pdf->headerStartY = 10;
        
        
        $pdf->Header('Testheader - by Daniel Inversini');
        
        
        
        
        
    }
}

?>
