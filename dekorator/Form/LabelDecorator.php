<?php

class LabelDecorator extends HtmlDecorator
{
    protected $label;
    
    public function setLabel($label) {
        $this->label = $label;
    }
    
    public function render() {
        $name = $this->getName();
        return "<label for=\"{$name}\">{$this->label}</label>\n"
            .$this->element->render();
    }
}

?>