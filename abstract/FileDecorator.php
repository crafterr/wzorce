<?php

abstract class FileDecorator
{
    protected $file;
    public function __construct(File $file) {
        $this->file = $file;
    }
    
    abstract function render();
  
}

?>