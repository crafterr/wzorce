<?php

class Factory implements FactoryInterface
{
    protected $file;
    public function __construct(File $file) {
        $this->file = $file;
    }
    public function create() {
        return new $this->file;
    }
}

?>