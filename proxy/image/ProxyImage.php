<?php

class ProxyImage implements HightResolutionImageInterface
{
    private $options;
    private $password;
    private $image;
    
    public function __construct($options, $password) {
        $this->options = $options;
        $this->password = $password;
    }
    
    public function display() {
        if ($this->password =='tajne') {
            if ($this->image==null) {
                $this->image = new Image($this->options);
            }
            $this->image->display();
        } else {
            echo 'access denied';
        }
    }
}

?>