<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    include("$root/cagelovers/templates/header.php");
    
    $basket = unserialize($_SESSION['basket']);
    
    $formErrors = [];
    $isValid = 0;
    
    $myPaymentMethod;
    $myShippingMethod;
    
    if(isset($_GET['creditcard'])) {
        if(!isset($_GET['name']) || $_GET['name'] == "") array_push($formErrors, "Name fehlt");
        if(!isset($_GET['nr']) || $_GET['nr'] == "") array_push($formErrors, "Kreditkarten Nr. fehlt");
        
        if(count($formErrors) == 0) {
            
            $myPaymentMethod = "KRE";
            if(isset($_GET['express']))
            {
                $myShippingMethod = "EXP";
                $isValid = 1;
            }
            if(isset($_GET['apost']))
            {
                $myShippingMethod = "APO";
                $isValid = 1;
            }
            if(isset($_GET['bpost']))
            {
                $myShippingMethod = "BPO";
                $isValid = 1;
            }
            
        }
    }
    else if(isset($_GET['bill']))
    {
        $formErrors = [];
        
        $myPaymentMethod = "REC";
            if(isset($_GET['express']))
            {
                $myShippingMethod = "EXP";
                $isValid = 1;
            }
            if(isset($_GET['apost']))
            {
                $myShippingMethod = "APO";
                $isValid = 1;
            }
            if(isset($_GET['bpost']))
            {
                $myShippingMethod = "BPO";
                $isValid = 1;
            }        

    }
    else if (isset($_GET['envelope']))
    {
        $formErrors = [];
        
        $myPaymentMethod = "NAC";
            if(isset($_GET['express']))
            {
                $myShippingMethod = "EXP";
                $isValid = 1;
            }
            if(isset($_GET['apost']))
            {
                $myShippingMethod = "APO";
                $isValid = 1;
            }
            if(isset($_GET['bpost']))
            {
                $myShippingMethod = "BPO";
                $isValid = 1;
            }        
      
    }
    if($isValid == 1){
        $basket->makeOrder($myPaymentMethod,$myShippingMethod);
        header("Location: /cagelovers/checkout/confirmation.php");
        

        exit;
    }

?>

<div class="container">
    <div class="row">
        <div class="checkout payment">
            <div class="col-lg-12">
                <h1>Zahlungsmethoden und Versand</h1>
                <h4>Gib bitte an wie du bezahlen &#109;&#246;&#99;&#104;&#116;&#101;&#115;&#116;.</h4>
                <hr />
                
                
                <div>
                    <ul class="inputs-list">
                       <li>
                          <label>
                            <input type="radio" checked="" name="paymentRadios" value="option1" id="payment-type-1">
                            <span>Kreditkarte</span>
                          </label>
                           <div class="infos">
                               <ul>
                                   <li>
                                        <label for="name"><?php echo utf8_decode("Vollständiger Name"); ?></label>
                                        <input id="payment-input-name" name="name" type="text" class="form-control">
                                   </li>
                                   <li>
                                        <label for="nr">Nummer</label>
                                        <input id="payment-input-nr" name="nr" type="text" class="form-control">
                                   </li>
                                   <li>
                                       <div class="errors">
                                       <?php

                                            for($i = 0; $i<count($formErrors); $i++){

                                                echo $formErrors[$i] . "<br />";
                                            }
                                        ?>
                                        </div>
                                   </li>
                               </ul>
                               
                           </div>
                        </li>
                        <li>
                          <label>
                            <input type="radio" name="paymentRadios" value="option2" id="payment-type-2">
                            <span>Rechnung</span>
                          </label>
                           <div class="infos">Rechnung wird an die angegebene Adresse geschickt.</div>
                        </li>
                        <li>
                          <label>
                            <input type="radio" name="paymentRadios" value="option3" id="payment-type-3">
                            <span>Geld in einem Umschlag</span>
                          </label>
                            <div class="infos">Schicken Sie uns das Geld in einem Umschlag.</div>
                        </li>
                      </ul>

                    <ul class="inputs-list">
                       <li>
                          <label>
                            <input type="radio" checked="" name="shipmentRadios" value="option1" id="shipment-type-1">
                            <span>Express</span>
                          </label>
                            <div class="infos">Sendung wird in den nächsten zwei Arbeitstagen aufgegeben.</div>
                        </li>
                        <li>
                          <label>
                            <input type="radio" name="shipmentRadios" value="option2" id="shipment-type-2">
                            <span>A-Post</span>
                          </label>
                           <div class="infos">Schweizerische Post A-Post.</div>
                        </li>
                        <li>
                          <label>
                            <input type="radio" name="shipmentRadios" value="option3" id="shipment-type-3">
                            <span>B-Post</span>
                          </label>
                            <div class="infos">Schweizerische Post B-Post.</div>
                        </li>
                      </ul>
                    
                    <div class="additional-info clearfix">
                        <a href="/cagelovers/checkout/overview.php" class="back btn btn-success"><?php echo utf8_decode("Zurück"); ?></a>
                        <a href="#" id="bt-make-order" class="btn btn-success">Weiter</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php include("$root/cagelovers/templates/footer.php") ?>