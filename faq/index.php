<?php 
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/appcode/Initializer.php") ;
    $_SESSION['navipoint'] = 'other';
    include ("$root/cagelovers/templates/header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>FAQ</h1>
            <hr />
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 faq">
            <div class="question">Ist Inversini häufig in den Ferien?</div>
            <div class="answer">Ja.</div>
            <div class="question">Goat goat?</div>
            <div class="answer">Goat.</div>
            <div class="question">.NET oder PHP?</div>
            <div class="answer">.NET</div>
            <div class="question">Butt oder Boobs?</div>
            <div class="answer">Whatever.</div>
        </div>
    </div>
</div>

<?php include("$root/cagelovers/templates/footer.php") ?>