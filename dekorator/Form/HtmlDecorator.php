<?php

abstract class HtmlDecorator implements HtmlElement
{
    protected $element;
   
    public function __construct(HtmlElement $element) {
        $this->element = $element;
    }
    
    public function getName() {
        return $this->element->getName();
    }
    
    public function __toString() {
        return $this->element->__toString();
    }
}

?>