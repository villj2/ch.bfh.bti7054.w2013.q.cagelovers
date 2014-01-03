 <?php
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include("$root/cagelovers/src/PDFOrder.php");

    //we could doublecheck orderID and userID...
    if($_GET['orderID'])
    {

        $pdf = new PDFOrder($_GET['orderID']);
    }

?> 
