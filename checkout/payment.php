<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    include ("$root/cagelovers/templates/header.php");

?>

<div class="container">
    <div class="row">
        <div class="checkout payment">
            <div class="col-lg-12">
                <h1>Zahlungsmethoden</h1>
                <h4>Gib bitte an wie du bezahlen &#109;&#246;&#99;&#104;&#116;&#101;&#115;&#116;.</h4>
                <hr />
                
                
                <div>
                    <ul class="inputs-list">
                       <li>
                          <label>
                            <input type="radio" checked="" name="optionsRadios" value="option1">
                            <span>Kreditkarte</span>
                          </label>
                           <div class="infos">
                               <ul>
                                   <li>
                                        <label for="name">Vollständiger Name</label>
                                        <input id="name" name="name" type="text" class="form-control">
                                   </li>
                                   <li>
                                        <label for="nr">Nummer</label>
                                        <input id="nr" name="nr" type="text" class="form-control">
                                   </li>
                               </ul>
                               
                           </div>
                        </li>
                        <li>
                          <label>
                            <input type="radio" name="optionsRadios" value="option2">
                            <span>Rechnung</span>
                          </label>
                           <div class="infos">Rechnung wird an die angegebene Adresse geschickt.</div>
                        </li>
                        <li>
                          <label>
                            <input type="radio" name="optionsRadios" value="option3">
                            <span>Brief in einem Umschlag</span>
                          </label>
                            <div class="infos">Schicken Sie uns das Geld in einem Umschlag.</div>
                        </li>
                      </ul>
                    
                    <div class="additional-info clearfix">
                        <a href="/cagelovers/checkout/overview.php" class="back btn btn-success">Zurück</a>
                        <a href="/cagelovers/checkout/confirmation.php" class="btn btn-success">Weiter</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>