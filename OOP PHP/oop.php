<?php 

require_once 'header.php';
require_once 'user.php';

// create new object :

$newUser = new User;

$newUser-> setUsername("Ali");
$newUser-> setPassword("1234");

echo "username : ".$newUser-> getUsername() . "<br>";
echo "password : ".$newUser-> getPassword();

require_once 'footer.php'






?>