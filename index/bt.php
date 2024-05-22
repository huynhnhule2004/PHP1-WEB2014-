<?php 
// class Product {
//     public $name;

//     public $code;

//     public $price;

//     public $quantity;


    // public function __construct() {
    //     $this->name = "nokia";
    //     $this->code = "SK123";
    //     $this->price = 20000;
    //     $this->quantity = 20;
        
    // }

    //cách 2
    // public function __construct($name,$code,$price,$quantity) {
    //     $this->name = $$name;
    //     $this->code = $$code;
    //     $this->price = $$price;
    //     $this->quantity = $$quantity;
        
    // }

    //cach 3
//     public function __construct($name = "ip",$code,$price,$quantity) {
//         $this->name = $$name;
//         $this->code = $$code;
//         $this->price = $$price;
//         $this->quantity = $$quantity;
        
//     }

//     public function addStock() {

//     }

//     public function sell($quantity) {
//         if($this->quantity <= 0) {
//             echo "Hết hàng!!!";
//             return;
//         }
//         $this->quantity = $this->quantity - $quantity;
//     }
// }
// //cach 1
// // $phone = new Product();
// //cach 2
// $phone = new Product("nokia","123",2000,20);
// $phone->sell(2);
// echo $phone->quantity;
// var_dump($phone);