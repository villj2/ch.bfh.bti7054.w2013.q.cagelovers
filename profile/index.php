<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    include ("$root/cagelovers/templates/header.php");
    
    $user = unserialize($_SESSION['user']);
        
    /*
    if(isset($_GET['logout']) && $_GET['logout'] == "true") {
        
        $_SESSION['user'] = null;
        $_SESSION['basket'] = null;
        
        header("Location: /cagelovers/");
        exit;
    }
    */
    
    /* AJAX Logout */
    if(isset($_POST['logout']) && !empty($_POST['logout'])) {
        
        $_SESSION['user'] = null;
        $_SESSION['basket'] = null;
        
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
          <h4><?php echo "Hallo " . $user->forename . " " . $user->name; ?></h4>
          <hr />
          
          <?php 
          
            echo "$user->street<br />";
            echo "$user->zip $user->city<br />";
            echo "$user->country<br />";
            echo "$user->email<br />";
          
          ?>
          
          <br />
          <a id="bt-logout" href="#">logout</a>
          
        <hr />
      </div>
    </div>
</div>

<?php include("$root/cagelovers/templates/footer.php") ?>