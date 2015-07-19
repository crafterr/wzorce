<?php

class Render
{
    protected $strategy;
    protected $text;
    public function __construct(RenderInterface $render, $text) {
        $this->strategy = $render;
        $this->text = $text;
    }
    
    public function render() {
        return $this->strategy->render($this->text);
    }
    
    public function setStategy(RenderInterface $render) {
        $this->strategy = $render;
    }
}

?>