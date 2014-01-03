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
                      <th class="last">PDF</th>
                    </tr>
            
                    <?php 
                    
                                    
                    $orders = new OrderDB();
                    $orders = $orders->getSpecificOrderByUserForGUI($user->id);
                    
                    
                    while ($row = $orders->fetch_array(MYSQLI_BOTH)) 
                    {
                      echo '<tr>';
                      echo '<td>' .  $row['ID'] .'</td>';
                      echo '<td>' .  $row['Status'] .'</td>';
                      echo '<td>' .  $row['Bestelldatum'] .'</td>';
                      echo '<td>' .  $row['Lieferdatum'] .'</td>';
                      echo '<td>' .  $row['Versandmethode'] .'</td>';
                      echo '<td>' .  $row['Adresse'] .'</td>';
                      echo '<td class="last"><a href="/cagelovers/print/pdfOrderOutput.php?orderID='.$row['ID'].'" class="icon-delete glyphicon glyphicon-remove-circle"></a></td>'; 

                      echo '</tr>';
                    }    
                     
                                   
                    ?>
            </div>
        </div>
    </div>
</div>