<?php

class Employee
{
    
    private $_name;

    private $_age;

    private $_salary;

    private $_department;

    public function __construct($name = "Unknown", $age = 0, $salary = 0, $department = "Unassigned")
    {
        $this->_name = $name;
        $this->_age = $age;
        $this->_salary = $salary;
        $this->_department = $department;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function setAge($age)
    {
        $this->_age = $age;
    }

    public function setSalary($salary)
    {
        $this->_salary = $salary;
    }

    public function setDepartment($department)
    {
        $this->_department = $department;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getAge()
    {
        return $this->_age;
    }

    public function getSalary()
    {
        return $this->_salary;
    }

    public function getDepartment()
    {
        return $this->_department;
    }

    public function displayInfo()
    {
        echo "Name: $this->_name <br>
            Age: $this->_age <br>
            Salary: $this->_salary <br>
            Department: $this->_department";
    }
};


//7. Tạo đối tượng "employee1" sử dụng constructor property promotion và
//cung cấp các giá trị cho tên, tuổi, mức lương và phòng ban.
$employee1 = new Employee("Nhu", 20, 10000, "IT");


//8. Sử dụng phương thức "displayInfo()" để hiển thị thông tin đầy đủ về "employee1".
echo "<h2>Employee 1:</h2>";
$employee1->displayInfo();


//9. Tạo đối tượng "employee2" bằng cách sử dụng constructor mặc định.
$employee2 = new Employee();


//10.Sử dụng các phương thức setter để thiết lập giá trị cho tên, tuổi, mức
//lương và phòng ban của "employee2".
$employee2->setName("Nhi");
$employee2->setAge(28);
$employee2->setSalary("9000");
$employee2->setDepartment("Recruitment");


//11.Sử dụng phương thức "displayInfo()" để hiển thị thông tin đầy đủ về "employee2"
echo "<hr>";
echo "<h2>Employee 2:</h2>";
$employee2->displayInfo();
