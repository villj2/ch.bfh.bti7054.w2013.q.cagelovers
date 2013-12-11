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
            <div class="col-lg-12">
                <h2>Featured product</h2>
                <p><img src="img/products/bed_320x240.jpg" /></p>
                <p>Let your dreams be guided by Cage. Never slept that good.</p>
                <p><a class="btn btn-default" href="#">View details</a></p>
            </div>
        </div>
    </div>
    
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#">View details »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#">View details »</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#">View details »</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>© Company 2013</p>
      </footer>
    </div> <!-- /container -->

<?php include("templates/footer.php") ?>
