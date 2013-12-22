<?php


$initRealPath = realpath($_SERVER["DOCUMENT_ROOT"]);

require("$initRealPath/src/ext/fpdf17/fpdf.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PDFOrder
 *
 * @author Daniel Inversini
 */
class PDFGeneric extends FPDF{
        
    //put your code here
    
    
    public $fontName;
    public $fontStyle;
    public $fontSize;
    
    
    public $addressFontName;
    public $addressFontStyle;
    public $addressFontSize;
    public $addressStartX;
    public $addressStartY;
    
    public $    
    
    public $headerFontName;
    public $headerFontStyle;
    public $headerFontSize;
    public $headerStartX;
    public $headerStartY;
    
    public $footerFontSize;
    public $footerFontName;
    public $footerFontStyle;
    public $footerStartX;
    public $footerStartY;
    
    
    
    function Header($txt){
        $this->SetXY($this->headerStartX, $this->headerStartY);
        $this->SetFont($this->headerFontName,  $this->headerFontStyle, $this->headerFontSize);
        $this->Cell(0,10,$txt);
        $this->ln();
    }
    
    function Footer($txt){
        $this->SetXY($this->footerStartX,$this->footerStartY);
        $this->SetFont($this->footerFontName,$this->footerFontSize, $this->footerFontSize);
        $this->Cell(0,10,$txt);
        $this->ln();
    }
    
    function Adress($txt){
        $this->SetXY($this->)
    }
    
    
}

?>
