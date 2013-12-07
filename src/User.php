<?php

class User
{
    public $id;
    public $sex;
    public $forename;
    public $name;
    public $street;
    public $city;
    public $country;
    public $email;
    public $password;
    public $zip;
    
    public function User()
    {
        
    }

    public function displayVar() {
        echo $this->var;
    }
}
?>
