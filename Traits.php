<?php

/**
 * Traits are used to declare methods that can be used in multiple classes.
 * Traits can have methods and abstract methods that can be used in multiple classes
 * The methods can have any access modifier (public, private, or protected).
 * Traits are declared with the trait keyword
 * To use a trait in a class, use the use keyword
 */
trait Message
{
    public function greater()
    {
        echo "Hello";
    }
    abstract public function greater2();

}

class welcomeMessage{
    use Message;
    public function greater2()
    {
        echo "Welcome";
    }
}
$obj= new welcomeMessage();
echo $obj->greater2();