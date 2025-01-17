<?php

namespace App\Bai2;


class Product
{

    protected $id;

    protected $name;

    protected $price;


    public function __construct($id, $name, $price)
    {

        $this->id = $id;

        $this->name = $name;

        $this->price = $price;
    }

    public function getId()
    {

        return $this->id;
    }

    public function setId($id)
    {

        $this->id = $id;
    }

    public function getName()
    {

        return $this->name;
    }

    public function setName($name)
    {

        $this->name = $name;
    }

    public function getPrice()
    {

        return $this->price;
    }

    public function setPrice($price)
    {

        $this->price = $price;
    }

    public function displayInfo()
    {

        echo "ID: $this->id <br>";
        echo "Name: $this->name <br>";
        echo "Price: $this->price <br>";
    }
}
