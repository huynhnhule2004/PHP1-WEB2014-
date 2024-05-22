<?php

namespace App\Bai2;

class ElectronicProduct extends Product
{

    private $_warrantyPeriod;

    
    public function __construct($id, $name, $price, $warrantyPeriod)
    {

        parent::__construct($id, $name, $price);

        $this->_warrantyPeriod = $warrantyPeriod;
    }

    public function getWarrantyPeriod()
    {

        return $this->_warrantyPeriod;
    }

    public function setWarrantyPeriod($warrantyPeriod)
    {

        $this->_warrantyPeriod = $warrantyPeriod;
    }


    public function displayInfo()
    {

        parent::displayInfo();

        echo "Warranty Period: $this->_warrantyPeriod months <br>";
    }
}
