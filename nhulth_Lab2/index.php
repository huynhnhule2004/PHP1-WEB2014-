<?php

require_once "vendor/autoload.php";

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use App\Company\Employee;

$employee = new Employee();

echo "<h2>Employee Information</h2>";

$employee->setId('001');

$employee->setName('Nhu');

$employee->setDepartment("IT");

$employee->setBasicSalary(3000);

$employee->setAllowance(1000);

$employee->setSalary($employee->calculateSalary());

echo $employee->getInfo();