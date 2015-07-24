<?php
namespace Square;
class ConcreteCreator extends Creator
{
    public function factoryMethod(ProductInterface $product) {
        $this->_product = $product;
        return $this->_product->provideShape();
    }
}

?>