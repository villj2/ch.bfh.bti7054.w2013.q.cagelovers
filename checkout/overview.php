<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    include ("$root/cagelovers/templates/header.php");
    
    // FIXME just4testing - create item and put them in basket
    $basket = new Basket();
    
    $item = new Item();
    $item->id = 1111;
    $item->category = "eat";
    $item->name = "Cage Lolipop";
    $item->prize = 33;
    $item->amount = 2;
    
    $basket->addItem($item);
    
    $item = new Item();
    $item->id = 1112;
    $item->category = "sex";
    $item->name = "Dildo";
    $item->prize = 19;
    $item->amount = 1;
    
    $basket->addItem($item);
    
    $_SESSION['basket'] = serialize($basket);
    
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
                            echo '<td class="last"><a href="#" class="icon-delete glyphicon glyphicon-remove-circle"></a></td>'; 
                            
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