<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    $_SESSION['navipoint'] = '';
    include("$root/cagelovers/templates/header.php");
    include("$root/cagelovers/src/db/ArticleSubDB.inc");
    
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
                      <th>Modification</th>
                      <th>Gesamtpreis</th>
                      <th class="last">&#76;&#246;&#115;&#99;&#104;&#101;&#110;</th>
                    </tr>
                    
                    <?php
                        
                        if(isset($_SESSION['basket']) && isset($basket->items)) {
                            foreach ($basket->items as &$value) {

                                if(isset($value->modification)) {
                                    $currentArticleSub = new ArticleSubDB();
                                    $currentArticleSub = $currentArticleSub->getSpecificArticleSub($value->modification);
                                    $currentArticleSub = $currentArticleSub->fetch_object();
                                }

                                echo '<tr>';

                                echo '<td>' . $value->name . '</td>';
                                echo '<td>' . $value->amount . '</td>';
                                echo '<td>' . $value->prize . '.-</td>';
                                if(isset($value->modification)) echo '<td>' . $currentArticleSub->Value . '</td>';
                                else echo '<td></td>';
                                echo '<td>' . $value->amount * $value->prize . '.-</td>';
                                echo '<td class="last"><a href="/cagelovers/checkout/overview.php?delete='.$value->id.'" class="icon-delete glyphicon glyphicon-remove-circle"></a></td>'; 

                                echo '</tr>';
                            }
                        }
                    
                    ?>
                  </table>
                
                <div class="additional-info clearfix">
                    <div class="prize-total">Preis total: <strong>
                        <?php
                            if(isset($_SESSION['basket'])) {
                                echo $basket->getPrizeTotal();
                            } else {
                                echo '0';
                            }
                            
                        ?>.-</strong></div>
                </div>
                
                <div class="additional-info clearfix">
                    <?php
                        if(isset($_SESSION['basket']) && isset($basket->items) && (count($basket->items) > 0)) {
                            echo '<a href="/cagelovers/checkout/payment.php" class="btn btn-success">Weiter</a>';
                        }
                    ?>
                </div>
                
            </div>
        </div>
      </div>
    </div>
</div>

<?php include("$root/cagelovers/templates/footer.php") ?>