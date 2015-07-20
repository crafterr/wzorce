<?php


class Div implements Printtable
{
    protected $inner;
    
    public function __construct(Printtable $inner) {
        $this->inner = $inner;
    }
    
    public function printOut(){
        echo '<div>';
        $this->inner->printOut();
        echo '</div>';
    }
}

?>