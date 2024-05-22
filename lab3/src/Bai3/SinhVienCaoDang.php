<?php

namespace App\Bai3;

class SinhVienCaoDang extends SinhVien {

    private $_khoaHoc;

    function __construct(string $hoTen, string $maSinhVien, float $diemThi, string $khoaHoc) {
        
        $this->_hoTen = $hoTen;
        $this->_maSinhVien = $maSinhVien;
        $this->_diemThi = $diemThi;
        $this->_khoaHoc = $khoaHoc;

    }


}