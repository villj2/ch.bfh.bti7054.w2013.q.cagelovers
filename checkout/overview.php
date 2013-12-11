<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    include ("$root/cagelovers/templates/header.php");
    
    $basket = unserialize($_SESSION['basket']);
    
?>

<div class="container">
    <div class="row">
        <div class="checkout">
            <div class="col-lg-12">
          
            <h1>Warenkorb</h1>
            <h4>Deine aktuellen Artikel im Warenkorb</h4>
            <hr />

            <div class="products-container">
                
                <?php
                if(!isset($basket)) {
                    
                    echo 'Keine Artikel im Warenkorb.';
                    exit;
                }
                
                if(isset($_GET["delete"])) {
                    
                    $basket->removeItem($_GET["delete"]);
                    $_SESSION['basket'] = serialize($basket);
                }
                ?>
                    
                <table width="100%" border="0">
                    <tr>
                      <th>Artikel</th>
                      <th>Anzahl</th>
                      <th>Preis</th>
                      <th>Gesamtpreis</th>
                      <th class="last">&#76;&#246;&#115;&#99;&#104;&#101;&#110;</th>
                    </tr>
                    
                    <?php
                        
                        foreach ($basket->items as &$value) {
            
                            echo '<tr>';
                            
                            echo '<td>' . $value->name . '</td>';
                            echo '<td>' . $value->amount . '</td>';
                            echo '<td>' . $value->prize . '.-</td>';
                            echo '<td>' . $value->amount * $value->prize . '.-</td>';
                            echo '<td class="last"><a href="/cagelovers/checkout/overview.php?delete='.$value->id.'" class="icon-delete glyphicon glyphicon-remove-circle"></a></td>'; 
                            
                            echo '</tr>';
                        }
                    
                    ?>
                  </table>
                
                <div class="additional-info clearfix">
                    <div class="prize-total">Preis total: <strong><?php echo $basket->getPrizeTotal(); ?>.-</strong></div>
                </div>
                
                <div class="additional-info clearfix">
                    <a href="/cagelovers/checkout/payment.php" class="btn btn-success">Weiter</a>
                </div>
                
            </div>
        </div>
      </div>
    </div>
</div>

<?php include("$root/cagelovers/templates/footer.php") ?>