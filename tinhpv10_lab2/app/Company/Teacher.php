<?php

namespace App\Company;


class Teacher extends Employee{
    public function sayHi(){
        return "Xin chào, tôi tên là ".$this->getName();
    }
}