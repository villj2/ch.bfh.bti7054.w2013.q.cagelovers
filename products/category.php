<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    include("$root/cagelovers/templates/header.php");
    
    include("$root/cagelovers/src/cfg/dbconfig.php");
    include("$root/cagelovers/src/db/CategoryDB.inc");
    include("$root/cagelovers/src/cfg/dbopen.php");
?>

<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>Products</h1>
        <hr>
      </div>
    </div>
</div>

<?php
    
    $dbCat = new CategoryDB();
    if(isset($_GET['rootID'])){
            $allCats = $dbCat->getChildCategory($_GET['rootID']);
            include("$root/cagelovers/src/cfg/dbclose.php");
            
            if($allCats->num_rows == 0) // no sub categories -> redirect
            {
                $articlePage = "index.php?CategoryID=".$_GET['rootID'];
                header('Location: '.$articlePage);
                exit;
            }
        
            echo "<div class='container'>";
            echo "<div class='row'>";
            while($row = $allCats->fetch_array(MYSQLI_BOTH))
            {
                echo "<div class='col-lg-4'>";

                echo utf8_decode("<p><a class='btn btn-default'  <a href='category.php?ID=".$row['ID']."'>".$row['DescriptionDE']."</a>");

                echo "</div>";
                //$linkAdr = '<a href="category.php?rootID='.$row['ID'].'>'.$row['DescriptionDE'].'</a>';
                //echo $linkAdr;
            }

            echo "</div>";            
                        
            
    }
    if(isset($_GET['ID'])){
        include("$root/cagelovers/src/cfg/dbclose.php");
        
        //echo"dani";
        //redirect to articles
        $articlePage = "index.php?CategoryID=".$_GET['ID'];
        //echo $articlePage;
        //exit;
        header('Location: '.$articlePage);
        exit;
    }
    

?>



<?php include("$root/cagelovers/templates/footer.php") ?>