<?php

function __autoload($className) {
  
    $filename = $className . ".php";
   
    if (is_readable($filename)) {
       
        require $filename;
    }
}

$action = new Decorate(new Decorable());
$action->save();