<?php

class Order
{
    private $strategy;
    public function __construct() {
        $this->strategy = new Nodiscount();
    }
    
    public function getDiscount() {
        return $this->strategy->discount();
    }
    
    public function setDiscount(DiscountIterface $discount) {
        $this->strategy = $discount;
    }
}

?>