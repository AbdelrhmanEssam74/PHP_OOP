<?php

class User
{
    // Access Modifier
    // Public    ->  the property or method can be accessed from everywhere. This is default
    // protected -> the property or method can be accessed within the class and by classes derived from that class
    // private   -> the property or method can ONLY be accessed within the class
    //-----------------------------------------------------------------------------//
    // $this keyword ->  a reserved keyword in PHP that refers to the calling object.
    private ?string $name = null;
    // Typed Properties
    public ?int $age = null; // Uninitialized
    //  Default value for property of type int may not be null, so Use the nullable type ?int to allow null default value
    /**
     * @param mixed $name
     * @return User::name
     */
    public function setName($name) : void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName() : string
    {
        return $this->name;
    }
    // Self Keyword -> used to access static or class variables or methods and this is used to access non-static or object variables or methods
    //The static keyword is used to declare properties and methods of a class as static. Static properties and methods can be used without creating an instance of the class.
    //The static keyword is also used to declare variables in a function which keep their value after the function has ended.
    public static string $title = 'OOP';
    public static function instance() : static{
        return new self;
    }
}
