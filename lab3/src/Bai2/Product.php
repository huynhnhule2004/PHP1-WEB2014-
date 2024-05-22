<?php

namespace App\Bai2;

class Product{

    private $_id;

    private $_name;

    private $_price;

    public function __construct($id, $name, $price) {

        $this->_id = $id;
        $this->_name = $name;
        $this->_price = $price;

    }

    public function getId() {

        return $this->_id;
    }

    public function getName() {

        return $this->_name;
    }

    public function getPrice() {

        return $this->_price;
    }

    public function setId($id) {

        $this->_id;
    }

    public function setName($name) {

        $this->_name;
    }

    public function setPrice($price) {

        $this->_price;
    }

    public function displayInfo() {

        echo "Id: $this->_id <br>";
        echo "Name: $this->_name <br>";
        echo "Price: $this->_price <br>";

    }
}