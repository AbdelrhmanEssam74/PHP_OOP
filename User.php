<?php

class User
{
    // Access Modifier
    // Public    ->  the property or method can be accessed from everywhere. This is default
    // protected -> the property or method can be accessed within the class and by classes derived from that class
    // private   -> the property or method can ONLY be accessed within the class
    //-----------------------------------------------------------------------------//
    // $this keyword ->  a reserved keyword in PHP that refers to the calling object.
    private $name;
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
}
