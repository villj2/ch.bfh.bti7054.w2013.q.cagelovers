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
            <h1><br>TEST FüR DB CONN</h1>
            <hr />
        </div>
    </div>
    <div>
        <?php
            include("$root/cagelovers/src/cfg/dbopen.php");
                
            $result = mysql_query('select * from tb_article');
            echo "----------articles---------<br>";
            while ($row = mysql_fetch_array($result)) {
                echo "ID:".$row{'ID'}." Title:".$row{'Title'}."description: ".$row{'Description'}."<br>";
                }
            echo "-----articles finished------<br>";
            include("$root/cagelovers/src/cfg/dbclose.php");
        ?>
    </div>
    
    <br>
    <h2> <?php  echo '<a href=/cagelovers/src/cfg/dbflush.php>flush DB</a>.'; ?>
    
        <br>
        <br>
        
    
</div>

<?php include("$root/cagelovers/templates/footer.php") ?>