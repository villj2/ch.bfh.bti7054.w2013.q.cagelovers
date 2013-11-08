<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// declare classes

$initRealPath = realpath($_SERVER["DOCUMENT_ROOT"]);
include ("$initRealPath/cagelovers/src/User.php");
include ("$initRealPath/cagelovers/src/LangDictionary.php");

// Language Handler
if((!isset($_GET['lang']) || ($_GET['lang'] != 1 || $_GET['lang'] != 2)) && isset($_GET['lang']) && ($_GET['lang'] == 1 || $_GET['lang'] == 2)) {
    $_SESSION['lang'] = $_GET['lang'];
}

// instanciate langDict
$langDict = LangDict::getInstance();

?>
