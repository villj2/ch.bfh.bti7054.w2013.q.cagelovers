<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    include ("$root/cagelovers/templates/header.php");
    
    if(isset($_SESSION['basket'])) $basket = unserialize($_SESSION['basket']);
    
    unset($_SESSION['basket']);

?>

<div class="container">
    <div class="row">
        <div class="checkout">
            <div class="col-lg-12">
          
            <h1>Bestellung abgeschickt</h1>
            <h4><?php echo utf8_decode("Vielen Dank für deine Bestellung.") ?></h4>
            <hr />
            
            <div class="additional-info clearfix">
                <a href="/cagelovers/" class="btn btn-success">Weiter einkaufen</a>
            </div>
            
            </div>
        </div>
    </div>
</div>

<?php include("$root/cagelovers/templates/footer.php") ?>