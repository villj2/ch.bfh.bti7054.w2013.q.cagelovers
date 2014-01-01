 <?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include("$root/cagelovers/src/PDFOrder.php");

$pdf = new PDFOrder(1);


?> 
