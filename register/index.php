<?php 
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    $_SESSION['navipoint'] = 'other';
    include("$root/cagelovers/templates/header.php") ;
    

    
    $formErrors = [];

    if(isset($_POST['validate'])) {
        
        if(!isset($_POST['sex']) || $_POST['sex'] == "") array_push($formErrors, "Anrede fehlt");
        if(!isset($_POST['forename']) || $_POST['forename'] == "") array_push($formErrors, "Vorname fehlt");
        if(!isset($_POST['name']) || $_POST['name'] == "") array_push($formErrors, "Name fehlt");
        if(!isset($_POST['street']) || $_POST['street'] == "") array_push($formErrors, "Strasse fehlt");
        if(!isset($_POST['city']) || $_POST['city'] == "") array_push($formErrors, "Ort fehlt");
        
        if(!isset($_POST['zip']) || $_POST['zip'] == "") array_push($formErrors, "Postleitzahl fehlt");
        if(!isset($_POST['zip']) || $_POST['zip'] == "" || !preg_match('/^\d{4}$/', $_POST['zip'])) array_push($formErrors, "Postleitzahl nicht korrekt");
        
        if(!isset($_POST['country']) || $_POST['country'] == "") array_push($formErrors, "Land fehlt");
        
        if(!isset($_POST['email']) || $_POST['email'] == "") array_push($formErrors, "E-Mail fehlt");
        if(!isset($_POST['email']) || $_POST['email'] == "" || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) array_push($formErrors, "E-Mail-Adresse ist nicht korrekt");
        
        if(!isset($_POST['password']) || $_POST['password'] == "") array_push($formErrors, "Passwort fehlt");
        
        if(count($formErrors) == 0) {
            
            // create user object
            $user = new User();
            $user->sex = $_POST['sex'];
            $user->forename = $_POST['forename'];
            $user->name = $_POST['name'];
            $user->street = $_POST['street'];
            $user->city = $_POST['city'];
            $user->zip = $_POST['zip'];
            $user->country = $_POST['country'];
            $user->email = $_POST['email'];
            $user->password = $_POST['password'];
            
            $_SESSION['user'] = serialize($user);
            
            
            // save to db
            //include because other path ?=
            include("$root/cagelovers/src/db/UserDB.inc");
            $user2Save = new UserDB();
            include("$root/cagelovers/src/cfg/dbconfig.php");
            include("$root/cagelovers/src/cfg/dbopen.php");
            
            $pwHash = md5($user->password);
            
            $user2Save->insertUser($user->email,$pwHash, $user->forename, $user->name, $user->street, $user->city, $user->zip, $user->country);
            
            
            include("$root/cagelovers/src/cfg/dbclose.php");
             
            // redirect
            header("Location: /cagelovers/register/complete.php");
            exit;
        }
    }
    

?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            
            <h1>Registrierung</h1>
            
            <hr />
            
            <div class="form-register">
                <form class="navbar-form navbar-left" role="search" action="index.php" method="post">
                    <div class="form-group">
                        <ul>
                            <li>
                                <label for="sex">Anrede</label>
                                <select name="sex">
                                    <option value="0">...</option>
                                    <option value="1">Herr</option>
                                    <option value="2">Frau</option>
                                    <option value="3">Beides</option>
                                  </select>
                            </li>
                            <li>
                                <label for="forename">Vorname</label>
                                <input id="forename" name="forename" type="text" class="form-control">
                            </li>
                            <li>
                                <label for="name">Nachname</label>
                                <input id="name" name="name" type="text" class="form-control">
                            </li>
                            <li>
                                <label for="street">Strasse</label>
                                <input id="street" name="street" type="text" class="form-control">
                            </li>
                            <li>
                                <label for="zip">PLZ</label>
                                <input id="zip" name="zip" type="text" class="form-control">
                            </li>
                            <li>
                                <label for="city">Ort</label>
                                <input id="city" name="city" type="text" class="form-control">
                            </li>
                            <li>
                                <label for="country">Land</label>
                                <select name="country">
                                    <option value="  ">...</option>
                                    <option value="CH">Schweiz</option>
                                    <option value="DE">Deutschland</option>
                                    <option value="AT">Oesterreich</option>
                                    <option value="IT">Italien</option>
                                    <option value="FR">Frankreich</option>
                                  </select>
                                
                            </li>                            
                            <li>
                                <label for="email">E-Mail</label>
                                <input id="email" name="email" type="text" class="form-control">
                            </li>
                            <li>
                                <label for="password">Passwort</label>
                                <input id="email" name="password" inputtype="hidden" class="form-control">
                            </li>                            
                            <li>
                                <button type="submit" class="btn btn-default">Abschicken</button>
                            </li>
                            <li>
                                <div class="errors">
                                    <?php
                                    
                                        for($i = 0; $i<count($formErrors); $i++){
                                            
                                            echo $formErrors[$i] . "<br />";
                                        }
                                        
                                    
                                    ?>
                                </div>
                            </li>
                            <input type="hidden" name="validate" value="1">
                        </ul>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../templates/footer.php") ?>