<?php
namespace Square;
abstract class Creator
{
    protected $_product;
    
    abstract public function factoryMethod(ProductInterface $product);
}

?>