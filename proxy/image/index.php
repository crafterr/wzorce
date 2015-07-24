<?php

function __autoload($className) {
  
    $filename = $className . ".php";
   
    if (is_readable($filename)) {
       
        require $filename;
    }
}

$image = new ProxyImage(array('width'=>10,'height'=>20),'tajne2');
echo $image->display();
$image2 = new ProxyImage(array('width'=>10,'height'=>20), "tajne");
echo $image2->display();