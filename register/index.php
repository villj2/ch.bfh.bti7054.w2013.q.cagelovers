<?php include("../templates/header.php") ?>

<?php 
    
    include("../appcode/User.php");

    //session_start();
    
    $formErrors = [];

    if(isset($_POST['validate'])) {
        
        if(!isset($_POST['forename']) || $_POST['forename'] == "") array_push($formErrors, "Vorname fehlt");
        if(!isset($_POST['name']) || $_POST['name'] == "") array_push($formErrors, "Name fehlt");
        if(!isset($_POST['street']) || $_POST['street'] == "") array_push($formErrors, "Strasse fehlt");
        if(!isset($_POST['plz']) || $_POST['plz'] == "") array_push($formErrors, "PLZ fehlt");
        if(!isset($_POST['city']) || $_POST['city'] == "") array_push($formErrors, "Ort fehlt");
        if(!isset($_POST['email']) || $_POST['email'] == "") array_push($formErrors, "E-Mail fehlt");
        
        if(count($formErrors) == 0) {
            
            // create user object
            $user = new User();
            $user->sex = $_POST['sex'];
            $user->forename = $_POST['forename'];
            $user->name = $_POST['name'];
            $user->street = $_POST['street'];
            $user->plz = $_POST['plz'];
            $user->city = $_POST['city'];
            $user->email = $_POST['email'];
            
            $_SESSION['user'] = serialize($user);
            
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
                                <label for="plz">PLZ</label>
                                <input id="plz" name="plz" type="text" class="form-control">
                            </li>
                            <li>
                                <label for="city">Ort</label>
                                <input id="city" name="city" type="text" class="form-control">
                            </li>
                            <li>
                                <label for="email">E-Mail</label>
                                <input id="email" name="email" type="text" class="form-control">
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