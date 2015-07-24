<?php

function __autoload($className) {
  
    $filename = $className . ".php";
   
    if (is_readable($filename)) {
       
        require $filename;
    }
}

$email = new EmailBody();
echo $email->loadBody();
echo '<br />';

$email = new ChristmasEmailBodyDecorator($email);
echo $email->loadBody();
echo '<br />';
$email = new NewYearEmailBodyDecorator($email);
echo $email->loadBody();
