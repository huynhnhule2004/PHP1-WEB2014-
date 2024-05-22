<?php

namespace App\Company;

class Teacher extends Employee
{

    public function sayHi()
    {
        return "Xin chao, toi ten la " . $this->getName();
    }
}
