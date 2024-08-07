<?php
require_once 'User.php';
$user = new User(); // Create a new Instance of User object
$user->setName("Abdo");
//echo "<pre>";
//var_dump(User::$title);
//var_dump(User::instance());
//echo "</pre>";

//------------------------------------------------------------------//
//-------------------------Inheritance------------------------------//

require_once 'BMW.php';
$bmwCar = new BMW();
$bmwCar->setColor("blueBlack");
$bmwCar->setCompany("BMW");
//echo "<pre>";
//print_r($bmwCar);
//echo "</pre>";

require_once 'mercedes.php';
$mercedesCar = new mercedes();
$mercedesCar->setColor("darkGray");
//$mercedesCar->setCompany("Mercedes");
//echo "<pre>";
//print_r($mercedesCar);
//echo "</pre>";

//------------------------------------------------------------------//
//-------------------------Encapsulation----------------------------//
require_once 'Database.php';
require_once 'SQLiteHandler.php';
require_once 'MySQLHandler.php';

$db = new Database();
$db->handle(new SQLiteHandler());
//$db->create(); // Creating sqlite database

$db->handle(new MySQLHandler());
//$db->create(); // Creating mysql database

//------------------------------------------------------------------//
//-------------------------Overriding-------------------------------//
require_once 'Admin.php';
require_once 'Person.php';
$admin = new Admin();
//echo $admin->setName("admin") . "<br/>"; // ADMIN

$person = new Person();
//echo $person->setName("person") . "<br/>"; // Person

//------------------------------------------------------------------//
//-------------------------Magic Method-----------------------------//
require_once 'MagicMethod.php';
$obj = new MagicMethod();
//var_dump($obj->instance());
//echo "<br>";
$obj1 = new MagicMethod();
//var_dump($obj1->instance());
//echo "<br>";
$obj2 = new MagicMethod();
//var_dump($obj2->instance());

unset($obj);
//echo "<br>";
//var_dump(MagicMethod::$connection);

//------------------------------------------------------------------//
//-------------------------Property Overloading---------------------//
require_once 'PropertyOverloading.php';
$instance = new PropertyOverloading();
$instance->age = 50;
$instance->lastname = "abdo";
$instance->address = "15ST, Cairo";
$instance->name = "username";
$instance->id = "5";
//var_dump($instance->id);
//------------------------------------------------------------------//
//-------------------------Method Overloading-----------------------//
require_once 'MethodsOverloading.php';
$instance2 = new MethodsOverloading();
var_dump($instance2->sum(20, 30, 4, 50, 60));