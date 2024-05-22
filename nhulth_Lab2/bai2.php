<?php

class Order
{
    
    private $_orderCode;

    private $_orderDate;

    private $_customerName;

    private $_products = [];

    public function __construct($orderCode, $orderDate, $customerName, $products)
    {
        $this->_orderCode = $orderCode;
        $this->_orderDate = $orderDate;
        $this->_customerName = $customerName;
        $this->_products = $products;
    }


    public function addProduct($productName, $productPrice)
    {
        $this->_products[] = [
            'name' => $productName,
            'price' => $productPrice
        ];
    }


    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->_products as $product) {
            $totalPrice += $product['price'] ?? 0;
        }
        return $totalPrice;
    }

    public function getOrderInfo()
    {
        echo "Order Code: $this->_orderCode <br>
            Order Date: $this->_orderDate <br>
            Customer Name: $this->_customerName <br>
            Products: <br>";
        foreach ($this->_products as $product) {
            echo "+ " . $product['name'] . ", $" . $product['price'] . "<br>";
        }
    }
}


//6. Tạo đối tượng từ lớp Order thông qua contructor khởi tạo chứa mảng sản phẩm.

$product = [
    ['name' => 'iphone11', 'price' => 1100],
    ['name' => 'iphone12', 'price' => 1200],
    ['name' => 'iphone13', 'price' => 1300]
];

$order = new Order("001", "2024-05-13", "Nhu", $product);

//7. Thêm 1 sản phẩm vào đối tượng trong câu 6 và hiển thị thông tin của
//đơn hàng

$order->addProduct("iphone14", 1400);

$order->getOrderInfo();

echo "<b>Total:</b> $" . $order->getTotalPrice();
