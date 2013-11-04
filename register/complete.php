<?php include("../templates/header.php") ?>

<?php 
    
    include("../appcode/User.php");
    //session_start();
    
    $user = unserialize($_SESSION['user']);

?>

<div class="container">
    <div class="row">
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-10">
            
            <div class="register-done">
            
                <h1>Registrierung</h1>

                <div class="complete">
                    Danke &#102;&#252;&#114; die Registrierung.
                </div>

                <hr />

                <a href="/cagelovers/profile/">Profil</a>
                <a href="/cagelovers/products/">Einkaufen</a>
            
            </div>
        </div>
    </div>
</div>

<?php include("../templates/footer.php") ?>