<?php

namespace App\Company;

class Employee{

    private $_name;
    
    protected function getName(){
       return $this->_name; 
    }

    public function setName($_name) {
        return $this->_name = $_name;
    }


}



