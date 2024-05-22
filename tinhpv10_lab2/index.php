<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once "vendor/autoload.php";



use App\Model\Product;

$product = new Product;
var_dump($product->connect());
