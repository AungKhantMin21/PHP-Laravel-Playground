<?php

class BankAccount {
    // Public property - accessible from anywhere
    public $accountNumber;

    // Protected property - accessible within this class and subclasses
    protected $balance;

    // Private property - accessible only within this class
    private $pin;

    // Constructor to initialize properties
    public function __construct($accountNumber, $balance, $pin) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        $this->pin = $pin;
    }

    // Public method to access private property $pin
    public function getPin() {
        return $this->pin; // Accessing private property from within the class
    }

    // Protected method - accessible within this class and subclasses
    protected function calculateInterest() {
        return $this->balance * 0.05;
    }
}


// Subclass inheriting from BankAccount
class SavingsAccount extends BankAccount {
    // Public method to display balance and interest
    public function showBalanceWithInterest() {
        $interest = $this->calculateInterest(); // Accessing protected method
        return "Balance: $" . ($this->balance + $interest);
    }
}


// Creating an object of BankAccount
$account = new BankAccount("12345", 1000, 4321);

echo "Account Number: " . $account->accountNumber; // Public property
echo "<br>";
echo "PIN: " . $account->getPin(); // Accessing private property through a public method



// Creating an object of SavingsAccount
$savings = new SavingsAccount("67890", 2000, 9876);
echo "<br>";
echo $savings->showBalanceWithInterest(); // Accessing protected method through subclass



// Trying to access private and protected properties/methods directly (will cause error if uncommented)
// echo $savings->balance;         // Error: Cannot access protected property
// echo $savings->pin;             // Error: Cannot access private property
// echo $savings->calculateInterest(); // Error: Cannot access protected method
?>