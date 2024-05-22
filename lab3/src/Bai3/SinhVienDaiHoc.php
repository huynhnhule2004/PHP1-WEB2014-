<?php

namespace App\Bai3;

class SinhVienDaiHoc extends SinhVien {

    private $_nganhHoc;

    public function __construct(string $hoTen, string $maSinhVien, float $diemThi, string $nganhHoc) {
        
        $this->_hoTen = $hoTen;
        $this->_maSinhVien = $maSinhVien;
        $this->_diemThi = $diemThi;
        $this->_nganhHoc = $nganhHoc;
    }

    

    public function xepLoai()
    {
        if($this->_diemThi > 10 || $this->_diemThi < 0) {
            return "Không hợp lệ";
        }

        if ($this->_diemThi >= 9.5 && $this->_nganhHoc == "Công nghệ thông tin") {
            return "Xuất sắc";
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