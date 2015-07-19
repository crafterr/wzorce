<?php

function __autoload($className) {
  
    $filename = $className . ".php";
   
    if (is_readable($filename)) {
       
        require $filename;
    }
}

$render = new Render(new RenderHtml(),"adam ma kota");
echo $render->render();
$render->setStategy(new RenderText());
echo $render->render();