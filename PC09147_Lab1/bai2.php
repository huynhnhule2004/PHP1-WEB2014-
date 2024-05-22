<?php
class Product
{
    public $name;

    public $price;

    public $quantity;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getInfo()
    {
        return "Name: " . $this->name . "<br>" .
            "Price: " . $this->price . "<br>" .
            "Quantity: " . $this->quantity . "<br>";
    }

    public function calculateTotal() {
        return  $this->price * $this->quantity;
    }
}
//Use class Product
$product = new Product();
$product->setName("iPhone X");
$product->setPrice(999);
$product->setQuantity(10);

//Display product information and calculate total value
echo $product->getInfo() . "<br>";
echo "Total: $" . $product->calculateTotal();
