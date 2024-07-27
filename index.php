<?php
require_once 'User.php';
$user = new User(); // Create a new Instance of User object
$user->setName("Abdo");
echo "<pre>";
//var_dump(User::$title);
//var_dump(User::instance());
echo "</pre>";

//------------------------------------------------------------------//
//-------------------------Inheritance------------------------------//

require_once 'BMW.php';
$bmwCar = new BMW();
$bmwCar->setColor("blueBlack");
$bmwCar->setCompany("BMW");
echo "<pre>";
print_r($bmwCar);
echo "</pre>";

require_once 'mercedes.php';
$mercedesCar = new mercedes();
$mercedesCar->setColor("darkGray");
$mercedesCar->setCompany("Mercedes");
echo "<pre>";
print_r($mercedesCar);
echo "</pre>";
