<?php

class User
{
    public $id;
    public $sex;
    public $forename;
    public $name;
    public $street;
    public $plz;
    public $city;
    public $email;
    
    public function User()
    {
        
    }

    public function displayVar() {
        echo $this->var;
    }
}
?>
