<?php

/**
 * Interfaces cannot have properties, while abstract classes can
 * All interface methods must be public
 * All methods in an interface are abstract, so they cannot be implemented in code and the abstract     keyword is not necessary
 * Classes can implement an interface while inheriting from another class at the same time
 * Can't create instances from interface
 */
interface Shap
{
    public function calcArea($dimensions);
}

class rectangular implements Shap
{
    public function calcArea($dimensions): float
    {
        return $dimensions * $dimensions;
    }
}