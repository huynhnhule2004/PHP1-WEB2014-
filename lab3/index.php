<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once "vendor/autoload.php";

use App\Bai3\SinhVien;
use App\Bai3\SinhVienCaoDang;
use App\Bai3\SinhVienDaiHoc;
use App\Bai3\SinhVienChinhQuy;

$sinhVien = new SinhVienDaiHoc("Lê Thị Huỳnh Như", "PC09147", 10,"Công nghệ thông tin");

echo "<h1>Sinh viên Đại học</h1>";

echo $sinhVien->getHoTen();

echo "<br>";

echo $sinhVien->xepLoai();

echo "<hr>";



$sinhVien1 = new SinhVienCaoDang("Văn A", "PC09147", 9,"Công nghệ phần mềm");

echo "<h1>Sinh viên Cao đẳng</h1>";


echo $sinhVien1->getHoTen();
echo "<br>";


echo $sinhVien1->getMaSinhVien();
echo "<br>";


echo $sinhVien1->getDiemThi();
echo "<br>";


echo $sinhVien1->xepLoai();

echo "<br>";

echo "<hr>";


$sinhVien3 = new SinhVienChinhQuy("Lê Thị Huỳnh Như", "PC09147", 10,"Công nghệ thông tin");

echo "<h1>Sinh viên Đại học</h1>";

echo $sinhVien3->getHoTen();

echo "<br>";

echo $sinhVien3->xepLoai();

echo "<hr>";

//Bai 2

use App\Bai1\Manager;

$employee = new Manager("PC123456", "Huỳnh Thanh Hoàng", 200000);

echo $employee->getName();


echo $employee->calculateSalary();

echo "<hr>";


//Bài 3

use App\Bai2\Product;

$product = new Product("123","áo",100);

