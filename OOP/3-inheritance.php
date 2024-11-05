<?php

class Car {
    // Constructor method to initialize the Car's properties
   public function __construct(public $name, public $color, protected $wheels = 4){}

   // Method to simulate driving
   public function drive(){
       echo "Car is driving with $this->wheels wheels";
   }

   // Final method that subclasses cannot override
   final public function honk() {
    echo "Beep! $this->name is honking!";
}
}


// Inheritance Example

// Subclass 'SportCar' extends the 'Car' class
class SportCar extends Car {

    // Overridden drive method from parent class
    public function drive() {
        echo "$this->name is driving fast with $this->wheels wheels!";
    }

    // Method specific to SportCar to simulate drifting
    public function drift(){
        echo "$this->name is drifiting with $this->wheels wheels.";
    }

}

// Creating an instance of the SportCar class
$car2 = new SportCar("Race Car","Red");


// Demonstrating own method
$car2->drift();
echo "<br>";


// Demonstrating overide method
$car2->drift();
echo "<br>";


// Demonstrating inherited method
$car2->honk();
echo "<br>";

?>