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
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

include("$root/cagelovers/src/db/OrderDB.inc");
include("$root/cagelovers/src/db/ShoppingCartDB.inc");
include("$root/cagelovers/src/PDFGeneric.php");

class PDFOrder extends PDFGeneric{
    
    //put your code here
    public $orderID;
    public $oOrder;
    public $oShoppingCart;
    
    public function __construct($orderID) {
        $this->orderID = $orderID;
        $this->init();
    }
    
    function init(){
        $pdf = new PDFGeneric();
        
        //get infos from order
        $this->oOrder = new OrderDB();
        $this->oOrder = $this->oOrder->getSpecificOrder($this->orderID);
        $this->oOrder = $this->oOrder->fetch_object();
        
        $this->oShoppingCart = new ShoppingCartDB();
        $this->oShoppingCart = $this->oShoppingCart->getAllItemsByOrderID($this->orderID);
        $this->oShoppingCart = $this->oShoppingCart->fetch_object();
        
        $addressText = $this->oOrder->ShippingName1."\n".$this->oOrder->ShippingName2."\n".$this->oOrder->ShippingStreet."\n".$this->oOrder->ShippingZIP." ".$this->oOrder->ShippingCity;
        
        
        
        $pdf->headerFontName = 'Courier';
        $pdf->headerFontSize = 20;
        $pdf->headerFontStyle = 'B';
        $pdf->headerStartX = 10;
        $pdf->headerStartY = 10;
        
        
        $pdf->footerFontName = 'Courier';
        $pdf->footerFontSize = 8;
        $pdf->footerFontStyle = 'B';
        $pdf->footerStartX = 10;
        $pdf->footerStartY = 275;
        
        $pdf->addressFontName = 'Courier';
        $pdf->addressFontSize = 12;
        $pdf->addressFontStyle = 'B';
        $pdf->addressStartX = -60;
        $pdf->addressStartY = 55;        
        
        $pdf->text01FontName = 'Courier';
        $pdf->text01FontSize = 10;
        $pdf->text01FontStyle = 'B';
        $pdf->text01StartX = 10;
        $pdf->text01StartY = 100;

        $pdf->text02FontName = 'Courier';
        $pdf->text02FontSize = 10;
        $pdf->text02FontStyle = 'B';
        $pdf->text02StartX = 10;
        $pdf->text02StartY = 200;
        
        $pdf->tableHeaderFontName = 'Courier';
        $pdf->tableHeaderFontSize = 12;
        $pdf->tableHeaderFontStyle = 'B';
        $pdf->tableDataFontName = 'Courier';
        $pdf->tableDataFontSize = 8;
        $pdf->tableDataFontStyle = 'B';        
        $pdf->tableStartX = 10;
        $pdf->tableStartY = 140;
        
        
        
        
        $pdf->renderHeader(utf8_decode("Auftragsbestätigung Auftrag [".$this->orderID."]"));
        
        $pdf->renderAdress($addressText);
        
        $pdf->renderFooter("CageLovers - release your cage!");
        
        $tmptxt = "Sehr geehrte Herr/Frau ".$this->oOrder->ShippingName1." ".$this->oOrder->ShippingName2;
        
        $pdf->renderText01(utf8_decode($tmptxt),"Ihre Bestelldetails wie folgt.");

                //Connect to database
        mysql_connect('login-5.hoststar.ch', 'web345', 'biobauer22');
        mysql_select_db('usr_web345_12');

        $pdf->AddCol('Title', 55,'Titel', 'C');
        $pdf->AddCol('Description', 55,'Beschrieb', 'C');
        $pdf->AddCol('Price', 20,'Preis', 'R');
        $pdf->AddCol('Value', 35,'Details', 'C');
        $pdf->AddCol('Count', 20,'Anzahl', 'R');  
        
        $prop=array('HeaderColor'=>array(255,150,100),
                        'color1'=>array(210,245,255),
                        'color2'=>array(255,255,255),
                        );
        
        $pdf->Table("select Title,Description,Price,Value,Count from view_PDFOrder where orderID = ".$this->orderID,$prop);
        
        $pdf->renderText02(utf8_decode("Vielen Dank für die Zahlung innert 30 Tagen."));
        $pdf->fpdf->Output();
        
        
    }
    
    
}

?>
