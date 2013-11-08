<?php

$formErrors = [];

if(isset($_POST['login'])) {
    
    if(!isset($_POST['email']) || $_POST['email'] == "") array_push($formErrors, "E-Mail-Adresse fehlt");
    if(!isset($_POST['password']) || $_POST['password'] == "") array_push($formErrors, "Passwort ist falsch");
    
    if(count($formErrors) == 0) {
        
        // TODO get user
        
        $user = new User();
        $user->forename = "Julien";
        $user->name = "Villiger";
        $_SESSION['user'] = serialize($user);
        
        // redirect
        header("Location: .");
        exit;
        
    } else {
        
        echo "login FAIL";
    } 
}

?>


<form class="navbar-form navbar-right" action="index.php" method="post">
<div class="form-group">
  <input type="text" name="email" placeholder="<?php echo $langDict->getKey("NAVI_EMAIL") ?>" class="form-control">
</div>
<div class="form-group">
  <input type="password" name="password" placeholder="<?php echo $langDict->getKey("NAVI_PASSWORD") ?>" class="form-control">
</div>
<button type="submit" class="btn btn-success"><?php echo $langDict->getKey("NAVI_SIGN_IN") ?></button>
<input type="hidden" name="login" value="1">
<a href="/cagelovers/register/" class="btn btn-success"><?php echo $langDict->getKey("NAVI_REGISTER") ?></a>
</form>