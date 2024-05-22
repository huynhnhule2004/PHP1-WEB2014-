<?php

namespace App\Company;

class Employee
{

   private $_id;

   private $_name;

   private $_salary;

   private $_department;

   private $_basicSalary;

   private $_allowance;
   

   public function __construct($id ='000' , $name = 'A', $department = 'IT', $basicSalary = 0, $allowance = 0, $salary = 0)
   {
      $this->_id = $id;
      $this->_name = $name;
      $this->_department = $department;
      $this->_basicSalary = $basicSalary;
      $this->_allowance = $allowance;
      $this->_salary = $salary;
   }

   public function setId($id)
   {
      $this->_id = $id;
   }

   public function getId()
   {
      return $this->_id;
   }

   public function setName($name)
   {
      $this->_name = $name;
   }

   public function getName()
   {
      return $this->_name;
   }

   public function setDepartment($department)
   {
      $this->_department = $department;
   }

   public function getDepartment()
   {
      return $this->_department;
   }

   public function setBasicSalary($basicSalary)
   {
      $this->_basicSalary = $basicSalary;

      // Cập nhật lương khi thay đổi basicSalary
      $this->_salary = $this->calculateSalary();
   }

   public function getBasicSalary()
   {
      return $this->_basicSalary;
   }

   public function setAllowance($allowance)
   {
      $this->_allowance = $allowance;

      // Cập nhật lương khi thay đổi allowance
      $this->_salary = $this->calculateSalary();
   }

   public function getAllowance()
   {
      return $this->_allowance;
   }

   public function setSalary($salary)
   {
      $this->_salary = $salary;
   }

   public function getSalary()
   {
      return $this->_salary;
   }


   public function getInfo()
   {
      return "ID: $this->_id <br>
                Name: $this->_name <br>
                Department: $this->_department <br>
                Basic Salary: $this->_basicSalary <br>
                Allowance: $this->_allowance <br>
                Salary: $this->_salary ";
   }

   public function calculateSalary()
   {
      return $this->_basicSalary + $this->_allowance;
   }
}
