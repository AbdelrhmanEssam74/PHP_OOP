<?php

/**
 * Function Overriding :
 * - both parent and child classes should have same function name with and number of arguments
 * - used to replace parent method in child class
 * - The purpose of overriding is to change the behavior of parent class method
 */

/**
 * Final keyword:
 * - used to prevent a class from being inherited and to prevent inherited method from being overridden.
 * - final method can't be overridden
 * - final class can't be inherited
 */

class Person
{
    protected string $name;
    final public function claAge(){

    }
    public function setName($name) : string{
        $this->name = $name;
        return ucfirst($name); // Return the username with first letter capitalized.
    }
}