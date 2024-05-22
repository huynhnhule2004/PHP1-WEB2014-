<?php

namespace App\Bai3;

class SinhVienCaoDang extends SinhVien
{

    private $_khoaHoc;


    public function __construct(string $hoTen, string $maSinhVien, float $diemThi, string $khoaHoc)
    {

        parent::__construct($hoTen, $maSinhVien, $diemThi);

        $this->_khoaHoc = $khoaHoc;
    }

    public function getKhoaHoc()
    {

        return $this->_khoaHoc;
    }

    public function setKhoaHoc($khoaHoc)
    {

        $this->_khoaHoc = $khoaHoc;
    }

    public function xepLoai()
    {

        if ($this->diemThi >= 8.5 && $this->_khoaHoc === "Nhóm ngành kỹ thuật") {

            return "Giỏi";
        }

        return parent::xepLoai();
    }


    public function displayInfo()
    {

        parent::displayInfo();

        echo "Khóa học: " . $this->getKhoaHoc() . "<br>";
    }
}
