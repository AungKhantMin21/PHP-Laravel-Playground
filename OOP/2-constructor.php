<?php


// Example with a Constructor method
class Animal {
    public $type;
    public $sound;

    // Constructor method that sets properties when the object is created
    public function __construct($type, $sound) {
        $this->type = $type;
        $this->sound = $sound;
    }

    public function makeSound() {
        return "The $this->type goes '$this->sound'";
    }
}

// Creating an Animal object using the constructor
$animal1 = new Animal("Dog", "Woof");
echo "<br>";
echo $animal1->makeSound();
echo "<br>";




//New Way in PHP 8

class Car {
     // Constructor method to initialize the Car's properties
    public function __construct(public $name, public $color, public $wheels = 4){}

    public function drive(){
        echo "Car is driving with $this->wheels wheels";
    }
}


// Creating an instance of the Car class
$car1 = new Car("BMW", "Black");

echo "<br>";
$car1->drive();
echo "<br>";



?>



