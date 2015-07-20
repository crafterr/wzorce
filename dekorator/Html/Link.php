<?php


class Link implements Printtable
{
    protected $inner;
    
    public function __construct(Printtable $inner) {
        $this->inner = $inner;
    }
    
    public function printOut(){
        echo '<a>';
        $this->inner->printOut();
        echo '</a>';
    }
}

?>