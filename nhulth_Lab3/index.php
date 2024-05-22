<?php


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require_once "vendor/autoload.php";


//BÀI 1

use App\Bai1\Employee;

use App\Bai1\Manager;

// Sử dụng các lớp đã định nghĩa
$employee = new Employee("PC001", "Nguyễn Văn A");

$manager = new Manager("PC09147", "Lê Thị Huỳnh Như", 1000000);

// In thông tin và tính lương của nhân viên
echo "<h1>Bài 1</h1>";
echo "<b>Employee Information:</b> <br>";
echo "ID: " . $employee->getId() . "<br>";
echo "Tên: " . $employee->getName() . "<br>";
echo "Salary: " . $employee->calculateSalary() . "<br>";

// In thông tin và tính lương của quản lý
echo "<br> <b>Manager Information:</b> <br>";
echo "ID: " . $manager->getId() . "<br>";
echo "Name: " . $manager->getName() . "<br>";
echo "Bonus: " . $manager->getBonus() . "<br>";
echo "Salary: " . $manager->calculateSalary() . "<br>";
echo "<hr>";


//BÀI 2
use App\Bai2\Product;

use App\Bai2\ClothingProduct;

use App\Bai2\ElectronicProduct;

echo "<h1>Bài 2</h1>";


// Tạo một đối tượng Product
$product = new Product("Pro1", "wallet", 2000);

echo "<b>Product Information:</b> <br>";

$product->displayInfo();

echo "<br>";


// Tạo một đối tượng ElectronicProduct
$electronicProduct = new ElectronicProduct("E1", "Ipad", 9000, 24);

echo "<b>Electronic Product Information:</b> <br>";

$electronicProduct->displayInfo();

echo "<br>";

// Tạo một đối tượng ClothingProduct
$clothingProduct = new ClothingProduct("C1", "Jacket", 600, "M");

echo "<b>Clothing Product Information:</b> <br>";

$clothingProduct->displayInfo();

echo "<hr>";


//BÀI 3

use App\Bai3\SinhVien;

use App\Bai3\SinhVienCaoDang;

use App\Bai3\SinhVienDaiHoc;

use App\Bai3\SinhVienChinhQuy;


echo "<h1>Bài 3</h1>";

// Tạo đối tượng SinhVien và in thông tin
$sinhVien = new SinhVien("Lê Thị Huỳnh Như", "PC09147", 11);

echo "<b>Thông tin sinh viên:</b> <br>";

$sinhVien->displayInfo();

echo "<br>";

// Tạo đối tượng SinhVienDaiHoc và in thông tin
$sinhVienDaiHoc = new SinhVienDaiHoc("Lê Thị Huỳnh Như", "PC09147", 9.9, "Công nghệ thông tin");

echo "<b>Thông tin sinh viên Đại học:</b> <br>";

$sinhVienDaiHoc->displayInfo();

echo "<br>";


// Tạo đối tượng SinhVienCaoDang
$sinhVienCaoDang = new SinhVienCaoDang("Nguyễn Văn B", "PC1234", 9.4, "Nhóm ngành kỹ thuật");

echo "<b>Thông tin sinh viên Cao đẳng:</b> <br>";

$sinhVienCaoDang->displayInfo();

echo "<br>";

// Tạo đối tượng SinhVienChinhQuy
$sinhVienChinhQuy = new SinhVienChinhQuy("Nguyễn Văn A", "PC0123", 8.0, "Quản trị kinh doanh");

echo "<b>Thông tin sinh viên Chính Quy:</b> <br>";

$sinhVienChinhQuy->displayInfo();
