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

//define('FPDF_FONTPATH','font/');
require('ext/fpdf17/fpdf.php');

class PDFGeneric extends FPDF{
        
    //put your code here
    public $fpdf; 
    
    function __construct() { 
        $this->fpdf = new FPDF('P','mm','A4');
        $this->fpdf->AliasNbPages('#p');
        $this->fpdf->SetAutoPageBreak(true);
        
    }
    
    
    public $text01FontName;
    public $text01FontStyle;
    public $text01FontSize;
    public $text01StartX;
    public $text01StartY;

    public $text02FontName;
    public $text02FontStyle;
    public $text02FontSize;
    public $text02StartX;
    public $text02StartY;    
    
    public $addressFontName;
    public $addressFontStyle;
    public $addressFontSize;
    public $addressStartX;
    public $addressStartY;
    
    
    
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
    
    
    public $tableHeaderFontSize;
    public $tableHeaderFontName;
    public $tableHeaderFontStyle;
    public $tableStartX;
    public $tableStartY;
    
    public $tableDataFontSize;
    public $tableDataFontName;
    public $tableDataFontStyle;
    
    
    function Output($name = '', $dest = '') {
        //clean output..
        ob_clean(); 
        $this->fpdf->Output($name, $dest);

    }
            
    function renderHeader($txt){
        
        $this->fpdf->AddPage();
        $this->fpdf->SetXY($this->headerStartX, $this->headerStartY);
        $this->fpdf->SetFont($this->headerFontName,  $this->headerFontStyle, $this->headerFontSize);
        $this->fpdf->Cell(0,10,$txt);
        $this->fpdf->ln();
    }
    
    function renderFooter($txt){
        $this->fpdf->SetXY($this->footerStartX,$this->footerStartY);
        $this->fpdf->SetFont($this->footerFontName,$this->footerFontStyle, $this->footerFontSize);
        $this->fpdf->Cell(0,0,$txt." Seite ".$this->fpdf->PageNo().'/#p',0,1,'R');
        $this->fpdf->ln();
    }
    
    function renderAdress($txt){
        $this->fpdf->SetXY($this->addressStartX,$this->addressStartY );
        $this->fpdf->SetFont($this->addressFontName,$this->addressFontStyle,$this->addressFontSize );
        $this->fpdf->Cell(0,0,"An:");
        $this->fpdf->ln();
        $this->fpdf->SetXY($this->addressStartX,$this->addressStartY+3 );
        $this->fpdf->MultiCell(50,4.5,$txt,1,'L',false);
        $this->fpdf->ln();
        
    }
    
    function renderText01($titel,$txt){
        $this->fpdf->SetXY($this->text01StartX,$this->text01StartY );
        $this->fpdf->SetFont($this->text01FontName,$this->text01FontStyle,$this->text01FontSize );
        $this->fpdf->Cell(0,0,$titel);
        $this->fpdf->ln();       
        $this->fpdf->SetXY($this->text01StartX,$this->text01StartY +3);
        $this->fpdf->MultiCell(190,20,$txt,0,'L',false);
        $this->fpdf->ln();
        
    }
    
    
    function renderText02($txt){
        $this->fpdf->SetXY($this->text02StartX,$this->text02StartY );
        $this->fpdf->SetFont($this->text02FontName,$this->text02FontStyle,$this->text02FontSize );
        $this->fpdf->MultiCell(190,20,$txt,0,'L',false);
        $this->fpdf->ln();
        
    }
    function adjustPrice($price){
        $price = sprintf("%01.2f", $price); 
        $newprice = str_replace(".", ",", $price); 
        return $newprice; 
    }
    
    function adjustDate($date){
        return date_parse_from_format("d.m.Y", $date);
    }
    
    /* 
     * pdf table from 
     * http://fpdf.de/downloads/addons/14/
     * 
     * all copyright by themselfs
     */
    var $ProcessingTable=false;
    var $aCols=array();
    var $HeaderColor;
    var $RowColors;
    var $ColorIndex;

    function Header()
    {
        //Print the table header if necessary
        if($this->ProcessingTable)
            $this->TableHeader();
    }

    function TableHeader()
    {
        $this->fpdf->SetFont($this->tableHeaderFontName,$this->tableHeaderFontStyle,$this->tableHeaderFontSize);
        $this->fpdf->SetXY($this->tableStartX,$this->tableStartY );
        $fill=!empty($this->HeaderColor);
        if($fill)
            $this->fpdf->SetFillColor($this->HeaderColor[0], $this->HeaderColor[1], $this->HeaderColor[2]);
        foreach($this->aCols as $col)
            $this->fpdf->Cell($col['w'], 6, $col['c'], 1, 0, 'C', $fill);
        $this->fpdf->Ln();
    }

    function Row($data)
    {
        $this->fpdf->SetFont($this->tableDataFontName,$this->tableDataFontStyle,$this->tableDataFontSize);
        $this->fpdf->SetX($this->tableStartX);
        $ci=$this->ColorIndex;
        $fill=!empty($this->RowColors[$ci]);
        if($fill)
            $this->fpdf->SetFillColor($this->RowColors[$ci][0], $this->RowColors[$ci][1], $this->RowColors[$ci][2]);
        foreach($this->aCols as $col)
            $this->fpdf->Cell($col['w'], 5, $data[$col['f']], 1, 0, $col['a'], $fill);
        $this->fpdf->Ln();
        $this->ColorIndex=1-$ci;
    }

    function CalcWidths($width, $align)
    {
        //Compute the widths of the columns
        $TableWidth=0;
        foreach($this->aCols as $i=>$col)
        {
            $w=$col['w'];
            if($w==-1)
                $w=$width/count($this->aCols);
            elseif(substr($w, -1)=='%')
                $w=$w/100*$width;
            $this->aCols[$i]['w']=$w;
            $TableWidth+=$w;
        }
        //Compute the abscissa of the table
        if($align=='C')
            $this->TableX=max(($this->w-$TableWidth)/2, 0);
        elseif($align=='R')
            $this->TableX=max($this->w-$this->rMargin-$TableWidth, 0);
        else
            $this->TableX=$this->lMargin;
    }

    function AddCol($field=-1, $width=-1, $caption='', $align='L')
    {
        //Add a column to the table
        if($field==-1)
            $field=count($this->aCols);
        $this->aCols[]=array('f'=>$field, 'c'=>$caption, 'w'=>$width, 'a'=>$align);
    }
    function Table($query, $prop=array())
    {
        //Issue query
        $res=mysql_query($query) or die('Error: '.mysql_error()."<BR>Query: $query");
        //Add all columns if none was specified
        if(count($this->aCols)==0)
        {
            $nb=mysql_num_fields($res);
            for($i=0;$i<$nb;$i++)
                $this->AddCol();
        }
        //Retrieve column names when not specified
        foreach($this->aCols as $i=>$col)
        {
            
            if($col['c']=='')
            {
                if(is_string($col['f']))
                    $this->aCols[$i]['c']=ucfirst($col['f']);
                else
                    $this->aCols[$i]['c']=ucfirst(mysql_field_name($res, $col['f']));
            }
        }
        //Handle properties
        if(!isset($prop['width']))
            $prop['width']=0;
        if($prop['width']==0)
            $prop['width']=$this->w-$this->lMargin-$this->rMargin;
        if(!isset($prop['align']))
            $prop['align']='C';
        if(!isset($prop['padding']))
            $prop['padding']=$this->cMargin;
        $cMargin=$this->cMargin;
        $this->cMargin=$prop['padding'];
        if(!isset($prop['HeaderColor']))
            $prop['HeaderColor']=array();
        $this->HeaderColor=$prop['HeaderColor'];
        if(!isset($prop['color1']))
            $prop['color1']=array();
        if(!isset($prop['color2']))
            $prop['color2']=array();
        $this->RowColors=array($prop['color1'], $prop['color2']);
        //Compute column widths
        $this->CalcWidths($prop['width'], $prop['align']);
        //Print header
        $this->TableHeader();
        //Print rows
        $this->fpdf->SetFont('Courier', '', 11);
        $this->ColorIndex=0;
        $this->ProcessingTable=true;
        while($row=mysql_fetch_array($res))
            $this->Row($row);
        $this->ProcessingTable=false;
        $this->cMargin=$cMargin;
        $this->aCols=array();
    }
    
    
    
}

?>
