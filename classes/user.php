<?php

class User
{
    public $username;
    public $name;
    public $lastname;
    public $email;
    public $password;

    function __construct($username, $name, $lastname, $email) {
        $this->username = $username;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    public function setPassword($password){

        $this->password =  $password;

    }
}