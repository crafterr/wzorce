<?php

class Decorable implements DecorableInterface
{
    public function save() {
        echo 'zapis do bazy z klasy '.__CLASS__;
    }
}

?>