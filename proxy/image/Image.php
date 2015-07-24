<?php

class Image implements HightResolutionImageInterface
{
    private $options;
    
    public function __construct($options) {
        $this->options = $options;
        
    }
    
    public function display() {
        echo 'Wyświetlam obrazek';
    }
    
}

?>