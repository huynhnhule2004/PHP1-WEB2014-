<?php


namespace App\Model;

use mysqli;

class Database
{

    private $_host = "localhost";

    private $_dbname = "php1_wd19303";

    private $_username = "root";

    private $_password = "mysql";

    public function connect() 
    {
        $mysqli = new mysqli($this->_host,$this->_username,$this->_password,$this->_dbname);

        if ($mysqli->connect_errno) {
            echo "Kết nối database không thành công: " . $mysqli->connect_error;
            exit();
        }

        return $mysqli;
    }



}
