<?php
    
    session_start();

    // Language Handler
    if((!isset($_GET['lang']) || ($_GET['lang'] != 1 || $_GET['lang'] != 2)) && isset($_GET['lang']) && ($_GET['lang'] == 1 || $_GET['lang'] == 2)) {
        $_SESSION['lang'] = $_GET['lang'];
    }
    
    // Handle active navi point
    $NAVI_HOME = 'home';
    $NAVI_PRODUCTS = 'products';
    $navipoint = isset($_SESSION['navipoint']) ? $_SESSION['navipoint'] : $NAVI_HOME;
    
    echo $navipoint;

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cagelovers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    
    <?php echo '<link href="/cagelovers/_assets/css/bootstrap.css" rel="stylesheet" media="screen">' ?> 
    <?php echo '<link href="/cagelovers/_assets/css/site.css" rel="stylesheet" media="screen">' ?> 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body style="">

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              
              <?php
              
                // HOME
                $tmp = $navipoint == $NAVI_HOME ? '<li class="active">' : '<li>';
                echo $tmp . '<a href="/cagelovers/">Home</a></li>';
                
                // PRODUCTS
                $tmp = $navipoint == $NAVI_PRODUCTS ? '<li class="active">' : '<li>';
                echo $tmp . '<a href="/cagelovers/products/">Produkte</a></li>';
              ?>
              
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Anderes <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Kontakt</a></li>
                <li><a href="#">AGB</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </li>
          </ul>
            
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
            <a href="/cagelovers/register/" class="btn btn-success">Register</a>
          </form>
            
          <ul class="nav navbar-nav navbar-right">
              
              <?php
                
                if($_SESSION['lang'] == 2) {
                    
                    echo '<li class=""><a href="./?lang=1">DE</a></li>';
                    echo '<li class="active"><a href="./?lang=2">FR</a></li>';
                    
                } else {
                    
                    echo '<li class="active"><a href="./?lang=1">DE</a></li>';
                    echo '<li class=""><a href="./?lang=2">FR</a></li>';
                }
              
              ?>
              
          </ul>
            
        </div><!--/.navbar-collapse -->
        
      </div>
    </div>