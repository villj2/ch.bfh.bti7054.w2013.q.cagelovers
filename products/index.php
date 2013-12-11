    <?php 

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    $_SESSION['navipoint'] = 'products';
    include ("$root/cagelovers/templates/header.php");
?>


<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>Products</h1>
        <hr />
      </div>
    </div>
</div>

<?php
    include("$root/cagelovers/src/cfg/dbconfig.php");
    
    
    if(isset($_GET['CategoryID']))
    {
        include("$root/cagelovers/src/db/ArticleDB.inc");
        include("$root/cagelovers/src/db/ArticleCategoryDB.inc");
        include("$root/cagelovers/src/cfg/dbopen.php");

        //echo $_GET['CategoryID'];
        $dbArt = new ArticleCategoryDB();
        $allArticles = $dbArt->getAllArticlesByCategory($_GET['CategoryID']);
        
        echo "<div class='container'>";
        echo "<div class='row'>";
        
        while($row = $allArticles->fetch_array(MYSQLI_BOTH))
        {
            $currentArticle = new ArticleDB();
            $currentArticle = $currentArticle->getSpecificArticle($row['ID']);
            $currentArticle = $currentArticle->fetch_object();
            
            echo '<div class="col-lg-4">';
            echo "<h2>$currentArticle->Title</h2>";
            echo "<p>$currentArticle->Description</p>";
            echo '<p><a class="btn btn-default" href="/cagelovers/products/detail.php?id='.$currentArticle->ID.'">View details</a></p>';
            echo '</div>';
            
        }
        echo "</div>";
                
        include("$root/cagelovers/src/cfg/dbclose.php");
        
    }
    else
    {
        include("$root/cagelovers/src/db/CategoryDB.inc");
        include("$root/cagelovers/src/cfg/dbopen.php");

        $dbCat = new CategoryDB();
        $allCats = $dbCat->getAllRootCategories();
        
        echo "<div class='container'>";
        echo "<div class='row'>";


        while($row = $allCats->fetch_array(MYSQLI_BOTH))
        {
            echo "<div class='col-lg-4'>";

            echo "<p><a class='btn btn-default'  <a href='category.php?rootID=".$row['ID']."'>".$row['DescriptionDE']."</a>";

            echo "</div>";
            //$linkAdr = '<a href="category.php?rootID='.$row['ID'].'>'.$row['DescriptionDE'].'</a>';
            //echo $linkAdr;
        }
        include("$root/cagelovers/src/cfg/dbclose.php");
        echo "</div>";
    }
?>



<?php include("$root/cagelovers/templates/footer.php") ?>