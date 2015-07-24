<?php

function __autoload($className) {
  
    $filename = $className . ".php";
   
    if (is_readable($filename)) {
       
        require $filename;
    }
}

$proxyUser = new ProxyUser();
$proxyUser->setFirstname("Adam");
$proxyUser->setLastname("Pietras");
echo $proxyUser->getFirstname();
echo $proxyUser->getLastname();