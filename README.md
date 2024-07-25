# Object-Oriented Programming (OOP) in PHP

## Table of Contents
- [Object-Oriented Programming (OOP) in PHP](#object-oriented-programming-oop-in-php)
  - [Classes and Objects](#classes-and-objects)
  - [Inheritance](#inheritance)
  - [Encapsulation](#encapsulation)
  - [Polymorphism](#polymorphism)
  - [Abstraction](#abstraction)
  - [Interfaces](#interfaces)
  - [Traits](#traits)
  - [Static Methods and Properties](#static-methods-and-properties)
  - [Visibility Modifiers](#visibility-modifiers)

## Object-Oriented Programming (OOP) in PHP

### Classes and Objects

In PHP, classes are blueprints for objects, defining properties (variables) and methods (functions) that the objects can have. Objects are instances of classes.
Here's an example of a simple class in PHP:

```
<?php
class Car {
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function start() {
        return $this->brand . ' car is starting!';
    }
}
```
### Inheritance

Inheritance allows a class to inherit properties and methods from another class. This promotes code reusability and helps in creating a hierarchy of classes.

```
class ElectricCar extends Car {
    public function charge() {
        return $this->brand . ' electric car is charging!';
    }
}
```

### Encapsulation

Encapsulation restricts direct access to some of an object's components,
protecting the integrity of the data. This is achieved through visibility modifiers like public, protected, and private.

```
class BankAccount {
    private $balance;

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function getBalance() {
        return $this->balance;
    }
}
```

### Polymorphism

Polymorphism allows objects of different classes to be treated as objects of a common superclass. This simplifies code and promotes flexibility.

```
interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    public function calculateArea() {
        // Calculate area of circle
    }
}

class Square implements Shape {
    public function calculateArea() {
        // Calculate area of square
    }
}
```
### Abstraction

Abstraction is the process of hiding the complex implementation details and showing only the essential features of an object.
Abstract classes and interfaces are used to achieve abstraction in PHP.

```
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    public function calculateArea() {
        // Calculate area of circle
    }
}
```
### Interfaces

Interfaces define a contract that a class must follow.
They specify what methods a class must implement without defining how those methods should be implemented.

```
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        // Log message to a file
    }
}

class DatabaseLogger implements Logger {
    public function log($message) {
        // Log message to a database
    }
}
```
### Traits

Traits are a mechanism in PHP that allows you to reuse methods in multiple classes.
They provide a way to include methods in a class without using inheritance.

```
trait Loggable {
    public function log($message) {
        // Log message
    }
}

class User {
    use Loggable;

    public function performAction() {
        $this->log('Performed action');
    }
}
```
### Static Methods and Properties

Static methods and properties belong to the class itself rather than to any instance of the class.
They can be accessed without creating an object of the class.

```
class Math {
    public static function add($a, $b) {
        return $a + $b;
    }
}

$result = Math::add(5, 3); // Call static method without creating an object
```
### Visibility Modifiers

Visibility modifiers control the accessibility of properties and methods in a class.
There are three visibility modifiers in PHP: public, protected, and private.

```
class Person {
    public $name; // Public - accessible from outside the class
    protected $age; // Protected - accessible within the class and subclasses
    private $email; // Private - accessible only within the class
}
```

<div>
  These additional OOP concepts in PHP can help you write more flexible, maintainable,
  and efficient code. Incorporating these concepts into your projects can lead to better code organization and reusability.
</div>

