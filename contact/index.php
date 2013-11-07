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
            <br />
            <p>
                Daniel Inversini
                <br />
                Hinterngasse 33
                <br />
                19330 &#77;&#252;&#108;&#108;&#104;&#97;&#117;&#115;&#101;&#110;
            </p>
            <br />
            <p>Oder schreiben Sie eine Nachricht an <a href="mailto:info@cagelovers.com?subject=Sinnlose Anfrage">diese Adresse</a>.</p>
            <br />
            
        </div>
    </div>
</div>

<?php include("$root/cagelovers/templates/footer.php") ?>