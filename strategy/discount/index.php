<?php
function __autoload($className) {
  
    $filename = $className . ".php";
   
    if (is_readable($filename)) {
       
        require $filename;
    }
}

$order = new Order();
$order->setDiscount(new DiscountEn());
echo $order->getDiscount();