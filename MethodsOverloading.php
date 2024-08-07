<?php

/**
 * __call
 * - This is a magic method that PHP calls when it tries to execute a method of a class, and it doesn't find it.
 * - This magic keyword takes in two arguments: a function name and other arguments to be passed into the function
 */
class MethodsOverloading
{
    public function __call(string $name, array $arguments)
    {
        if(!method_exists($this, $name)):
            return array_sum($arguments) ?? ($name == "sum");
        endif;
    }
}