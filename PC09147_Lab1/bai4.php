<?php

class Product {
    public $name;

    public $code;

    public $price;

    public $quantity;


    public function updateInfo($name, $code, $price, $quantity) {
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function addStock($quantity) {
        $this->quantity += $quantity;
    }

    public function sell($quantity) {
        if ($this->quantity >= $quantity) {
            $this->quantity -= $quantity;
            echo "The total price of $quantity {$this->name} sold is " . $this->price * $quantity . "<br>";

        } else {
            echo "Not enough stock available.<br>";
        }
    }

    public function getPrice() {
        return $this->price;
    }

    public function printInfo() {
        echo "<h3>Product Information:</h3>";
        echo "Name: {$this->name}<br>";
        echo "Code: {$this->code}<br>";
        echo "Price: $ {$this->price}<br>";
        echo "Available Quantity: {$this->quantity}<br>";
    }
}

//Use class Product
$product = new Product();
$product->updateInfo("iPhone 15", "IP15001", 10000, 10);
$product->addStock(10);
$product->sell(2);
$product->printInfo();

