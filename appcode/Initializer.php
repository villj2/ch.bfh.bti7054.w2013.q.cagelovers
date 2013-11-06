<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// declare classes

$initRealPath = realpath($_SERVER["DOCUMENT_ROOT"]);
include ("$initRealPath/cagelovers/appcode/User.php");

?>
