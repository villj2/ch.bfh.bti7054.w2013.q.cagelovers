<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/appcode/Initializer.php") ;
    include ("$root/cagelovers/templates/header.php");
    
        
    if(isset($_GET['logout']) && $_GET['logout'] == "true") {
        
        $_SESSION['user'] = null;
        
        header("Location: /cagelovers/");
        exit;
    }
    
?>

<div class="container">
    <div class="row">
      <div class="col-lg-12">
          <a href='/cagelovers/profile?logout=true'>logout</a>
        <hr />
      </div>
    </div>
</div>

<?php include("$root/cagelovers/templates/footer.php") ?>