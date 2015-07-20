<?php

class Decorate implements DecorableInterface
{
    protected $_decorable;
    public function __construct(DecorableInterface $decorable) {
        $this->_decorable = $decorable;
    }
    
    public function save() {
        echo 'save z metody '.__CLASS__;
        
        $this->_decorable->save();
    }
}

?>