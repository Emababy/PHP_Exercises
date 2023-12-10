<?php 

class User {
    private $username;
    private $password;

    public function getUsername(){

        return $this-> username;
    }
    public function getPassword(){

        return $this-> password;
    }
    public function setUsername($us){

        $this-> username = $us ;
    }
    public function setPassword($pw){

        $this-> password = $pw;
    }

}



?>