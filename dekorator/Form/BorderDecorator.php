<?php

class BorderDecorator extends HtmlDecorator
{
   
    public function render() {
        $name = $this->getName();
        return '<div style="border:1px solid gray;">'.$this->element->render().'</div>';
    }
}

?>