<?php 
    class Rectangle {
        public $length;
        public $width;

        public function setDimensions($length, $width) {
            $this->length = $length;
            $this->width = $width;
        }

        public function getArea() {
            return $this->length * $this->width;
        }
        public function getPerimeter() {
            return 2 * ($this->length + $this->width);
        }

        public function drawRectangle() {
            echo '<div style="width:  ' . $this->width .'px; height: '.$this->length.'px; background-color:pink; "></div> ';
        }
    }

//Use class Rectangle
$rectangle = new Rectangle();
$rectangle->setDimensions(200,400);

//Display area, perimeter and draw rectangle
echo "Area: " . $rectangle->getArea() . "<br>";
echo "Perimeter: " . $rectangle->getPerimeter() . "<br>";
$rectangle->drawRectangle();
