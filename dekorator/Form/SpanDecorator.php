<?php

class SpanDecorator extends HtmlDecorator
{
    protected $span;
    
    public function setSpan($span) {
        $this->span = $span;
    }
    
    public function render() {
        $name = $this->getName();
        return "<span>{$this->span}</span>\n"
            .$this->element->render();
    }
}

?>