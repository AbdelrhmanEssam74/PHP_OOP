<?php
require_once 'User.php';
$user = new User(); // Create a new Instance of User object
$user->setName("Abdo");
var_dump($user);
echo $user->getName();