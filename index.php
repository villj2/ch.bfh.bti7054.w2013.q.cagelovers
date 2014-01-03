<?php 
    
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    require_once("$root/cagelovers/src/Initializer.php") ;
    $_SESSION['navipoint'] = 'home';
    include ("$root/cagelovers/templates/header.php");
?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
          <div class="title-big">
              <img src="/cagelovers/img/logo_128x170.png" />
              <h1>Break out your Cage!</h1>
          </div>
        <p><? echo "All hail to Cage. Written with php." ?></p>
        <p><!--<a class="btn btn-primary btn-lg">Learn more</a>--></p>
      </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="checkout">
                <div class="col-lg-12">
                    <h1>Random Products</h1>
                <hr />
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
          
          
          <?php
            
            include("$root/cagelovers/src/cfg/dbconfig.php");
            include("$root/cagelovers/src/db/ArticleDB.inc");
            include("$root/cagelovers/src/cfg/dbopen.php");

            $articles = new ArticleDB();
            $articles = $articles->getAllArticles();
            
            $articlesArray = [];
            
            while($row = $articles->fetch_array(MYSQLI_BOTH))
            {
                $currentArticle = new ArticleDB();
                $currentArticle = $currentArticle->getSpecificArticle($row['ID']);
                $currentArticle = $currentArticle->fetch_object();

                array_push($articlesArray, $currentArticle);
            }
            
            // choose random numbers, make sure there are no duplicates
            $rndNumbers = [];
            while(count($rndNumbers) < 3) {
                $rnd = rand(0, count($articlesArray) - 1);
                
                if(in_array($rnd, $rndNumbers)) {
                    continue;
                } else {
                    array_push($rndNumbers, $rnd);
                }
            }
            
            // write articles
            for($i = 0; $i<count($rndNumbers); $i++) {
                
                $curr = $articlesArray[$rndNumbers[$i]];
                
                echo '<div class="col-sm-4">';
                echo utf8_decode("<h2>$curr->Title</h2>");
                echo utf8_decode("<p>$curr->Description</p>");
                echo utf8_decode('<p><a class="btn btn-default" href="/cagelovers/products/detail.php?id='.$curr->ID.'">View details</a></p>');
                echo '</div>';
            }
            
            //echo webservice
            
            include("$root/cagelovers/src/WebServiceConnector.php");
            
            include("$root/cagelovers/src/cfg/dbclose.php");
            echo "</div>";
          
          ?>
      <hr>

      <footer>
        <p>Julien Villiger / Daniel Inversini 2013</p>
      </footer>
    </div> <!-- /container -->

<?php include("templates/footer.php") ?>
