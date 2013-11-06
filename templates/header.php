<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);

    // Language Handler
    if((!isset($_GET['lang']) || ($_GET['lang'] != 1 || $_GET['lang'] != 2)) && isset($_GET['lang']) && ($_GET['lang'] == 1 || $_GET['lang'] == 2)) {
        $_SESSION['lang'] = $_GET['lang'];
    }
    
    // Handle active navi point
    $NAVI_HOME = 'home';
    $NAVI_PRODUCTS = 'products';
    $NAVI_OTHER = 'other';
    $navipoint = isset($_SESSION['navipoint']) ? $_SESSION['navipoint'] : $NAVI_HOME;
    

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
                
                // PRODUCTS
                $tmp = $navipoint == $NAVI_OTHER ? '<li class="dropdown active">' : '<li class="dropdown">';
                echo $tmp;
              ?>
              
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Anderes <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/cagelovers/contact/">Kontakt</a></li>
                <li><a href="/cagelovers/agb/">AGB</a></li>
                <li><a href="/cagelovers/faq/">FAQ</a></li>
              </ul>
            </li>
          </ul>
            
          <?php
          
          if(isset($_SESSION['user'])) {
              
              include("$root/cagelovers/templates/navLoggedIn.php");
              
          } else {
              
              include("$root/cagelovers/templates/navLogin.php");
          } 
          
          ?>
            
          <ul class="nav navbar-nav navbar-right lang-switcher">
              
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