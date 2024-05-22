<?php

namespace App\Bai1;

class Manager extends Employee
{

    private $_bonus;

    public function __construct($id, $name, $bonus) {

        parent::__construct($id, $name);

        $this->_bonus = $bonus;
    }

    public function calculateSalary() {
        return parent::calculateSalary() + $this->_bonus;
    }

}
