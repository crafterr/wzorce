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

$emailChristmas = new ChristmasEmailBodyDecorator($email);
echo $emailChristmas->loadBody();
echo '<br />';
$emailNewYear = new NewYearEmailBodyDecorator($emailChristmas);
echo $emailNewYear->loadBody();
