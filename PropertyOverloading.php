<?php

/**
 * Property_Overloading
 * - create dynamic properties in the object context.
 * Magic_Methods
 * - __set()      -> triggered while initializing overloaded properties.
 * - __get()      -> triggered while using overloaded properties with PHP print statements.
 * - __isset()    -> This magic method is invoked when we check overloaded properties with isset() function
 * - __unset()    -> Similarly, this function will be invoked on using PHP unset() for overloaded properties.
 */
class PropertyOverloading
{
    private int $id;
    private float $salary;
    public string $name;
    public array $overloaded = [];

    public function __set($key, $value)
    {
        $this->overloaded[$key] = $value;
    }

    public function __get($key)
    {
        if (property_exists($this, $key))
            return $this->$key;
        if (array_key_exists($key, $this->overloaded))
            return $this->overloaded[$key];
        return "not found";
    }

}