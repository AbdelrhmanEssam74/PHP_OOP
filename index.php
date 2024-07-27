<?php
require_once 'User.php';
$user = new User(); // Create a new Instance of User object
$user->setName("Abdo");
echo "<pre>";
var_dump(User::$title);
var_dump(User::instance());
echo "</pre>";
