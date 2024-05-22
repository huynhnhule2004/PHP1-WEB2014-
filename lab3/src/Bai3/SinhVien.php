<?php

namespace App\Bai3;

class SinhVien
{

   protected $_hoTen;

   protected $_maSinhVien;

   protected $_diemThi;


    public function __construct(string $hoTen, string $maSinhVien, float $diemThi)
    {
        $this->_hoTen = $hoTen;
        $this->_maSinhVien = $maSinhVien;
        $this->_diemThi = $diemThi;
    }


    public function getHoTen()
    {
        return $this->_hoTen;
    }

    public function getMaSinhVien()
    {
        return $this->_maSinhVien;
    }

    public function getDiemThi()
    {
        return $this->_diemThi;
    }

    public function xepLoai()
    {
        if($this->_diemThi > 10 || $this->_diemThi < 0) {
            return "Không hợp lệ";
        }


        if ($this->_diemThi >= 9) {
            return "Giỏi";
        }

        if ($this->_diemThi >= 8) {
            return "Khá";
        }

        if ($this->_diemThi >= 5) {
            return "Trung Bình";
        }

        if ($this->_diemThi < 5) {
            return "Yếu";
        }
    }
}
