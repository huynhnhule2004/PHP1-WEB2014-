<?php

namespace App\Bai3;

class SinhVienDaiHoc extends SinhVien
{

    private $_nganhHoc;


    public function __construct(string $hoTen, string $maSinhVien, float $diemThi, string $nganhHoc)
    {

        parent::__construct($hoTen, $maSinhVien, $diemThi);

        $this->_nganhHoc = $nganhHoc;
    }

    public function getNganhHoc()
    {

        return $this->_nganhHoc;
    }

    public function setNganhHoc($nganhHoc)
    {

        $this->_nganhHoc = $nganhHoc;
    }

    public function xepLoai()
    {

        if ($this->diemThi >= 9.5 && $this->_nganhHoc === "Công nghệ thông tin") {

            return "Xuất sắc";
        }

        return parent::xepLoai();
    }

    public function displayInfo()
    {

        parent::displayInfo();

        echo "Ngành Học: " . $this->getNganhHoc() . "<br>";
    }
}
