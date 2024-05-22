<?php

namespace App\Bai1;

class Employee
{


    //private chỉ dùng được trong class này 
    //class bên ngoài, hoặc class com
    //không truy cập được
    protected $_id;

    protected $_name;


    //Khi nào sử dụng từ khóa new thì code hàm nay sẽ được gọi
    //hàm này tên là constractor
    //chán rồi thì nghỉ ghi
    function __construct($id, $name)
    {

        $this->_id = $id;

        $this->_name = $name;
    }

    public function getId()
    {

        return $this->_id;
    }

    public function getName()
    {

        return $this->_name;
    }

    public function setId($id)
    {

        $this->_id = $id;
    }

    public function setName($name)
    {

        $this->_name = $name;
    }

    public function calculateSalary() {

        $salary = 5100000;

        return $salary;
    }
}
