<?php

require_once "vendor/autoload.php";



use App\Company\Employee;

$teacher = new Employee();



use App\Company\Teacher;

$teacher = new Teacher();
$teacher->setName("Tinh");
echo $teacher->sayHi();