<?php

namespace App\Bai2;

class ClothingProduct extends Product
{

    private $_size;

    public function __construct($id, $name, $price, $size)
    {

        parent::__construct($id, $name, $price);

        $this->_size = $size;
    }


    public function getSize()
    {

        return $this->_size;
    }

    public function setSize($size)
    {

        $this->_size = $size;
    }

    public function displayInfo()
    {

        parent::displayInfo();

        echo "Size: $this->_size <br>";
    }
}
