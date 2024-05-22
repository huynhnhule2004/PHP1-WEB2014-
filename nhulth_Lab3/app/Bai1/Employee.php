<?php

namespace App\Bai1;

class Employee
{

    protected $_id;

    protected $_name;


    public function __construct($id, $name)
    {

        $this->_id = $id;

        $this->_name = $name;
    }


    public function getId()
    {

        return $this->_id;
    }

    public function setId($id)
    {

        $this->_id = $id;
    }

    public function getName()
    {

        return $this->_name;
    }

    public function setName($name)
    {

        $this->_name = $name;
    }

    public function calculateSalary()
    {

        //Giả sử lương của nhân viên là 9 triệu
        $salary = 9000000;

        return $salary;
    }
}
