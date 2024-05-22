<?php
// class Person
// {
//     public $name;

//     public $age;

//     public $code;


//     public function __construct()
//     {
//         $this->name = "Phan Văn Tèo";
//         $this->age = "25";
//         $this->code = "PC001";
//     }

//     public  function getInfo() {
//         $this->name = "Phan Văn";
//         return "Ông $this->name hiện $this->age tuổi có mã số sinh viên là $this->code";
//     }
// }

// $person = new Person();
// echo $person->getInfo();
// spl_autoload_register(function ($class){

// });

// use scr\
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// class Product{
//     private $name;

//     public $price;

//     echo $this->name;

// }

// $product = new Product;
// var_dump($product);
// // echo $product->name;
// echo $product->price;
// echo "Code chay toi day";

class Animal {
    public $name;

    protected $age;

    private $weight;

    public function __construct($name, $age, $weight) {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getWeight() {
        return $this->weight;
    }
}

$animal = new Animal("Rex",3,15);

echo $animal->getName();
echo $animal->getAge();
echo $animal->getWeight();


$animal->setWeight(20);

echo $animal->getName();
echo $animal->getAge();
echo $animal->getWeight();

