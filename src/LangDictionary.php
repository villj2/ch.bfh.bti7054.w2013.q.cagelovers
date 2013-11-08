<?php

class LangDict {
    
    private $dict;
    
    static private $instance = null;
    
    static public function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self;
            
            global $dict;
        
            $dict['NAVI_HOME'] = array(1 => "Home", 2 => "Home");
            $dict['NAVI_PRODUCTS'] = array(1 => "Produkte", 2 => "Products");
            $dict['NAVI_OTHER'] = array(1 => "Anderes", 2 => "Other");
            $dict['NAVI_CONTACT'] = array(1 => "Kontakt", 2 => "Contact");
            $dict['NAVI_AGB'] = array(1 => "AGB", 2 => "AGB");
            $dict['NAVI_FAQ'] = array(1 => "FAQ", 2 => "FAQ");
            
            $dict['NAVI_SIGN_IN'] = array(1 => "Einloggen", 2 => "Sign In");
            $dict['NAVI_REGISTER'] = array(1 => "Registrieren", 2 => "Register");
            $dict['NAVI_EMAIL'] = array(1 => "E-Mail-Adresse", 2 => "E-Mail-Address");
            $dict['NAVI_PASSWORD'] = array(1 => "Passwort", 2 => "Password");
            $dict['NAVI_PROFILE'] = array(1 => "Profil", 2 => "Profile");
        }
        
        return self::$instance;
    }

    private function __construct(){}
    private function __clone(){}
    
    public function getKey($key) {
        
        global $dict;
        
        return $dict[$key][$_SESSION['lang']];
    }
}

?>
