<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    include ("$root/cagelovers/templates/header.php");
    
    $user = unserialize($_SESSION['user']);
        
    if(isset($_GET['logout']) && $_GET['logout'] == "true") {
        
        $_SESSION['user'] = null;
        
        header("Location: /cagelovers/");
        exit;
    }
    
    // don't show profile if user is not logged in
    if(!isset($_SESSION['user'])) {
        
        // redirect
        header("Location: /cagelovers/");
        exit;
    }
?>

<div class="container">
    <div class="row">
      <div class="col-lg-12">
          
          <h1>Profil</h1>
          <h4>Hier werden deine Profilinfos aufgezeigt.</h4>
          <hr />
          
          <?php echo "Hallo " . $user->forename . " " . $user->name; ?>
          
          <br /><br />
          
          <a href='/cagelovers/profile?logout=true'>logout</a>
          
        <hr />
      </div>
    </div>
</div>

<?php include("$root/cagelovers/templates/footer.php") ?>