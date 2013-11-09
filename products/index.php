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
        <h4>Choose a category</h4>
        <hr />
      </div>
    </div>
</div>

<div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h2>Bettwaesche</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="/cagelovers/products/detail.php">View details »</a></p>
      </div>
      <div class="col-lg-4">
        <h2>Kleidung</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#">View details »</a></p>
     </div>
      <div class="col-lg-4">
        <h2>Esswaren</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-default" href="#">View details »</a></p>
      </div>
        <div class="col-lg-4">
        <h2>Stofftiere</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-default" href="#">View details »</a></p>
      </div>
        <div class="col-lg-4">
        <h2>S&M Spiele</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-default" href="#">View details »</a></p>
      </div>
    </div>

    <hr>

    <footer>
      <p>© Company 2013</p>
    </footer>
</div>

<?php include("$root/cagelovers/templates/footer.php") ?>