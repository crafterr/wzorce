<?php

function __autoload($className) {
  
    $filename = $className . ".php";
   
    if (is_readable($filename)) {
       
        require $filename;
    }
}

$input = new InputText("firstname");
$label = new LabelDecorator($input);
$label->setLabel("firstname_label");
$span = new SpanDecorator($label);
$span->setSpan("firtname_span");
$border = new BorderDecorator($span);
echo $border->render();
