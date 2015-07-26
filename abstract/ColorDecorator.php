<?php

class ColorDecorator extends FileDecorator
{
    public function render() {
        return '<div style="background:red;">'.$this->file->render().'</div>';
    }
}

?>