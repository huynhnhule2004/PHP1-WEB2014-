<?php

namespace App\Bai3;

class SinhVien
{

    protected $hoTen;

    protected $maSinhVien;

    protected $diemThi;


    public function __construct(string $hoTen, string $maSinhVien, float $diemThi)
    {

        $this->hoTen = $hoTen;

        $this->maSinhVien = $maSinhVien;

        $this->diemThi = $diemThi;
    }


    public function getHoTen()
    {

        return $this->hoTen;
    }

    public function getMaSinhVien()
    {

        return $this->maSinhVien;
    }

    public function getDiemThi()
    {

        return $this->diemThi;
    }

    public function xepLoai()
    {

        if ($this->diemThi > 10 || $this->diemThi < 0) {

            return "Không hợp lệ";
        }

        if ($this->diemThi >= 9) {

            return "Giỏi";
        }
        if ($this->diemThi >= 8) {

            return "Khá";
        }
        if ($this->diemThi >= 5) {

            return "Trung Bình";
        }
        if ($this->diemThi < 5) {

            return "Yếu";
        }
    }

    public function displayInfo()
    {

        echo "Họ tên: " .  $this->getHoTen() . "<br>";
        echo "Mã sinh viên: " . $this->getMaSinhVien() . "<br>";
        echo "Điểm thi: " . $this->getDiemThi() . "<br>";
        echo "Xếp loại: " . $this->xepLoai() . "<br>";
    }
}
