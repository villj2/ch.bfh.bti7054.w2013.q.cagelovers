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
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Produkte</a></li>
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
          </form>
            
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./">DE</a></li>
            <li><a href="../navbar-static-top/">FR</a></li>
          </ul>
            
        </div><!--/.navbar-collapse -->
        
      </div>
    </div>