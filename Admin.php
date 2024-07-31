<?php
require_once 'Person.php';
class Admin extends Person
{
    /**
     * override set name method
     */
    public function setName($name): string
    {
        $this->name = $name;
        return  strtoupper($name); // Return the administrator name with all letters capitalized.
    }

    /**
     * Cannot override final method
     */
//    public function claAge(){
//
//    }
}