<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    $_SESSION['navipoint'] = '';
    include("$root/cagelovers/templates/header.php");
    //include("$root/cagelovers/src/db/OrderDB.inc");
    
    if(isset($_SESSION['user']))
    {
        $user = unserialize($_SESSION['user']);
    }    
    
    
?>


<div class="container">
    <div class="row">
        <div class="checkout">
            <div class="col-lg-12">
          
            <h1>Bestellungen</h1>
            <h4>Deine bisherigen Bestellungen</h4>
            <hr />
            
             <table width="100%" border="0">
                    <tr>
                      <th>ID</th>
                      <th>Status</th>
                      <th>Bestelldatum</th
                      <th>Lieferdatum</th>
                      <th>Versandmethode</th>
                      <th>Adresse</th>
                      <th class="last">&#76;&#246;&#115;&#99;&#104;&#101;&#110;</th>
                    </tr>
            
                    <?php 
                    
                    echo $user->id;
                    
                    
                    $orders = new OrderDB();
                    $orders = $orders->getSpecificOrderByUserForGUI($user->id);
                    
                    
                    while ($row = $orders->fetch_array(MYSQLI_BOTH)) 
                    {
                      print $row['ID'] .'<br />';
                      print $row['UserID'] .'<br />';
                      print $row['Status'] .'<br />';
                      print $row['Bestelldatum'] .'<br />';
                      print $row['Lieferdatum'] .'<br />';
                      print $row['Versandmethode'] .'<br />';
                      print $row['Adresse'] .'<br />';
                    }    
                     
                                   
                    ?>
            </div>
        </div>
    </div>
</div>