<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    include ("$root/cagelovers/templates/header.php");
    
    if(isset($_GET['id']) && isset($_GET['add'])) {
        
        $basket = unserialize($_SESSION['basket']);
        
        // if item is already in basket edit amount
        // else add new item to basket with amount 1
        if($basket->hasItem($_GET['id'])) {
            
            echo "item existing<br />";
            
            $item = $basket->getItemById($_GET['id']);
            
            echo "item name: $item->name <br />";
            echo "item amount: $item->amount <br />";
            
            $item->amount++;
            
            $basket->updateItem($item);
            
            $_SESSION['basket'] = serialize($basket);
            
        } else {
            echo "item NOT inside, add it now";
            
            $item = new Item();
            $item->id = 1111;
            $item->category = "eat";
            $item->name = "Cage Lolipop";
            $item->prize = 33;
            $item->amount = 1;
            $basket->addItem($item);
        }
    }
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
                <a href="?add=true&id=1111" class="btn btn-success">In den Warenkorb</a>
            </div>
            
            </div>
        </div>
    </div>
</div>