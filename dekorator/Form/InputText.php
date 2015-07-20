<?php

//obiekt dekorowany
class InputText implements HtmlElement
{
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function render() {
        return "<input type=\"text\" id=\"{$this->name}\" name=\"{$this->name}\" />\n";
    }
}

?>