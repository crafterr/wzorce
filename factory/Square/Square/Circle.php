<?php
namespace Square;
class Circle implements ProductInterface
{
    public function provideShape() {
        return "products/circle.png";
    }
}

?>