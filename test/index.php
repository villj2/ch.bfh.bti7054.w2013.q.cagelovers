<?php 
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    $_SESSION['navipoint'] = 'other';
    include ("$root/cagelovers/templates/header.php");
    
    include("$root/cagelovers/src/cfg/dbconfig.php");
    
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1><br>pdf output - ORDER ID 1</h1>
            <br>
            <?php 
            echo "<p><a class='btn btn-default'  <a href='pdfOrderOutput.php?ID=1'>ID 1</a>";
            ?>
            <hr />
        </div>
    </div>    

    
    <div class="row">
        <div class="col-lg-12">
            <h1><br>TEST FüR DB CONN</h1>
            <hr />
        </div>
    </div>
    <div>
        <?php
            include("$root/cagelovers/src/cfg/dbopen.php");
             
            //echo phpinfo();
              
            include("$root/cagelovers/src/cfg/dbShowAll.php");
            include("$root/cagelovers/src/cfg/dbclose.php");
        ?>
    </div>
    
    <br>
    <h2> <?php  echo '<a href=/cagelovers/src/cfg/dbflush.php>flush DB</a>.'; ?>
    
        <br>
        <br>
     <h2> <?php  echo '<a href=/cagelovers/src/cfg/dbFill.php>Fill DB</a>.'; ?>
    
</div>

<?php include("$root/cagelovers/templates/footer.php") ?>