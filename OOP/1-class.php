<?php

// Basic example of a class in PHP

// A class is like a blueprint for an object.
class Person {
    // Properties are variables that hold information about each Dog object.
    public $name;
    public $age;

    // Method (Function inside the class that defines behavior)
    public function eat() {
        return "Person is eating!";
    }

    // Method to set the person's name
    public function setName($name) {
        $this->name = $name;
    }

    // Method to set the person's age
    public function setAge($age) {
        $this->age = $age;
    }

    // Method to get the perosn's info
    public function getInfo() {
        return "Name: $this->name, age: $this->age";
    }
}

// Object (Instance of the Class)
$person1 = new Person();
$person1->setName("Buddy");     // Setting the name property
$person1->setAge(22); // Setting the age property


// Calling methods on the $person1 object to get its information and make it bark
echo $person1->getInfo();
echo "<br>";
echo $person1->eat();
echo "<br>";


//New Way in PHP 8

class Car {
    public function __construct(public $name, public $color, public $wheels = 4){}

    public function drive(){
        echo "Car is driving with $this->wheels wheels";
    }
}

$car1 = new Car("BMW", "Black");

echo "<br>";
$car1->drive();
echo "<br>";




// Inheritance

class SportCar extends Car {
    public function drift(){
        echo "$this->name is drifiting with $this->wheels wheels.";
    }
}

$car2 = new SportCar("Race Car","Red");
echo "<br>";
$car2->drift();
echo "<br>";

?>
