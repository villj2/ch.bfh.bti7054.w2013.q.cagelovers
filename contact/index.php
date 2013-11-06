<?php 
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/appcode/Initializer.php") ;
    $_SESSION['navipoint'] = 'other';
    include ("$root/cagelovers/templates/header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Kontakt</h1>
            <hr />
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div>Bei Fragen wenden Sie sich bitte an folgende Adresse.</div>
            <div>
                
            </div>
        </div>
    </div>
</div>

<?php include("$root/cagelovers/templates/footer.php") ?>