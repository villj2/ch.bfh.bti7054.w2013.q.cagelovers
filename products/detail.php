<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    include ("$root/cagelovers/templates/header.php");
    
?>

<div class="container">
    
    <div class="row">
        <div class="checkout">
            <div class="col-lg-12">
            
            <h1>#Name des Produkts#</h1>
            <h4>#Kategorie#</h4>
            <hr />
            
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="checkout">
            <div class="col-lg-4">
            
            <img src="/cagelovers/img/products/bed_320x240.jpg">
            
            </div>
            <div class="col-lg-8">
                <div class="info">
                    <div class="description">
                        <table>
                            <tr>
                                <td class="bold">Preis:</td>
                                <td>33.-</td>
                            </tr>
                            <tr>
                                <td class="bold">&#83;&#116;&#252;&#99;&#107;&#97;&#110;&#122;&#97;&#104;&#108;:</td>
                                <td>120</td>
                            </tr>
                            
                            <tr>
                                <td class="bold">Kategorie:</td>
                                <td>&#66;&#252;&#99;&#104;&#101;&#114;</td>
                            </tr>
                        </table>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="checkout">
            <div class="col-lg-12">
            
            <div class="additional-info clearfix">
                <a href="/cagelovers/" class="back btn btn-success">zur Übersicht</a>
                <a href="#" class="btn btn-success">In den Warenkorb</a>
            </div>
            
            </div>
        </div>
    </div>
</div>