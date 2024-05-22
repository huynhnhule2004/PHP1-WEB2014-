<?php

namespace App\Company;

class Employee{
    
    private $_name;

    private $_code;

    private $_salary;

    private $_department;

    private $_allowance;


    function __construct($name = "Nhu", $code = 001, $salary = 1000, $department = "IT", $allowance = 500) {

        $this->_name = $name;

        $this->_code = $code;

        $this->_salary = $salary;

        $this->_department = $department;

        $this->_allowance = $allowance;
    }
    /**
     * getName là getter
     * ...
     */

     public function getName() {
        return $this->_name;
     }

     public function getCode() {
        return $this->_code;
     }

     public function getSalary() {
        return $this->_salary;
     }

     public function getDepartment() {
        return $this->_salary;
     }

     public function getAllowance() {
        return $this->_allowance;
     }

     public function setName($_name) {
        return $this->_name = $_name;
     }
}