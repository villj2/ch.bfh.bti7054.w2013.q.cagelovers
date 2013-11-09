<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    include ("$root/cagelovers/templates/header.php");

?>

<div class="container">
    <div class="row">
        <div class="checkout">
            <div class="col-lg-12">
          
            <h1>Bestellung abgeschickt</h1>
            <h4>Vielen Dank für deine Bestellung.</h4>
            <hr />
            
            <div class="additional-info clearfix">
                <a href="/cagelovers/" class="btn btn-success">Weiter einkaufen</a>
            </div>
            
            </div>
        </div>
    </div>
</div>