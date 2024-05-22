<?php

//private = riêng tư, public, protected
//class như là 1 template không xác định rõ là ai, là đối tượng nào, nó chỉ chung chung
// class Person {
//     private $_strFirstName = "Tèo";//private thi ten bien co dau _ trc ten

//     private $_strSurName = "Phan Văn";

//     function getFirstName() {
//         return $this->_strFirstName;
//     }
// }
// //instance = teacher là thể hiện của class Person
// $teacher = new Person();

// echo $teacher->getFirstName();


class Fruit
{
    public $name;

    public $color;


    /**
     * @param string $name
     * Hàm này dùng để lưu giá trị của tên trái cây
     * 
     */
    public function setName($name)
    {
        echo "Dòng 39 name: ";
        var_dump($name);
        echo "<br>Dòng 41 this->name: ";
        var_dump($this->name);
        $this->name = $name;
        echo "<br>Dòng 44 this->name: ";
        var_dump($this->name);
    }

    /** */
    public function getName()
    {
    }
}

$traiCam = new Fruit();
$traiCam->setName("Trái Cam");
echo $traiCam->getName() . "<br>";
