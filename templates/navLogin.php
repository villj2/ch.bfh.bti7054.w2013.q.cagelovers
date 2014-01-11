<?php

$formErrors = [];

if(isset($_POST['login'])) {
    
    if(!isset($_POST['email']) || $_POST['email'] == "") array_push($formErrors, "E-Mail-Adresse fehlt");
    if(!isset($_POST['password']) || $_POST['password'] == "") array_push($formErrors, "Passwort ist falsch");
    
    if(count($formErrors) == 0) {
        
        include("$root/cagelovers/src/LoginHelper.php");
        $loginHelper = new LoginHelper($_POST['email'],$_POST['password']);
        
        
        
        if($loginHelper->isAuth() == true){
                
            include("$root/cagelovers/src/cfg/dbconfig.php");
            include("$root/cagelovers/src/cfg/dbopen.php");
            
            //include for class
            include("$root/cagelovers/src/db/UserDB.inc");
               
            // TODO get user
            $userDB = new UserDB();
            $user = new User();
           
             
            $currentDBUser = $userDB->getSpecificUserByMail($_POST['email']);
            
            $row = $currentDBUser->fetch_array(MYSQLI_ASSOC);
                
            $user->forename = $row['name1'];
            $user->name = $row['name2'];
            $user->city = $row['city'];
            $user->email = $_POST['email'];
            $user->id = $row['ID'];
            $user->street = $row['street'];         
            $user->country = $row['country'];
            $user->zip = $row['zip'];
            
            $user->id = $row['ID'];

            
            include("$root/cagelovers/src/cfg/dbclose.php");
            
            $_SESSION['user'] = serialize($user);
        
            // redirect
            header("Location: .");
            exit;
        }
        else {
             //echo "login FAIL DB";
             echo "<div class='hidden alert-info'>Benutzername oder Passwort nicht korrekt.</div>";
        }
        
    } else {
        
        echo "<div class='hidden alert-info'>Benutzername oder Passwort nicht korrekt.</div>";
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