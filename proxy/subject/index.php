<?php

function __autoload($className) {
  
    $filename = $className . ".php";
   
    if (is_readable($filename)) {
       
        require $filename;
    }
}

$obj = new Proxy();
$obj->doSomething();
$obj->doSomething();