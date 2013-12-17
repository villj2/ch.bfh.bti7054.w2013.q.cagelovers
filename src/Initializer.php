<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// declare classes

$initRealPath = realpath($_SERVER["DOCUMENT_ROOT"]);
include ("$initRealPath/cagelovers/src/User.php");
include ("$initRealPath/cagelovers/src/LangDictionary.php");
include ("$initRealPath/cagelovers/src/Basket.php");
include ("$initRealPath/cagelovers/src/Item.php");

// Language Handler
if(isset($_GET['lang']))
{    
    if($_GET['lang'] == 1 || $_GET['lang'] == 2)
    {
        setLang($_GET['lang']);
    }
    else
    {
        setLang(1);
    }
}
else
{
    if(isset($_COOKIE['Language']))
    {
        //echo 'cookie set: '.$_COOKIE['Language'];
        
        if($_COOKIE['Language'] == "1" || $_COOKIE['Language'] == "2" || $_COOKIE['Language'] == 1 || $_COOKIE['Language'] == 2)
        {
            //echo 'cookie lang: '.$_COOKIE['Language'];
            
            setLang($_COOKIE['Language']);
        }
        else
        {
            setLang(1);
        }
    }
    else
    {
        //echo 'cookie not set';
        setLang(1);
    }
}

function setLang($lang)
{
    $_SESSION['lang'] = $lang;
    
    //echo 'set cookie to root: '.$lang;
    
    setCookie("Language", $lang, time() + 86400, '/');
}

// instanciate langDict
$langDict = LangDict::getInstance();

?>
