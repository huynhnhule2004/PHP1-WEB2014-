<?php

namespace App\Bai3;

class SinhVienChinhQuy extends SinhVienDaiHoc
{

    public function __construct(string $hoTen, string $maSinhVien, float $diemThi, string $nganhHoc)
    {

        parent::__construct($hoTen, $maSinhVien, $diemThi, $nganhHoc);
    }
}
