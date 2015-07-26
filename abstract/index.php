<?php
function __autoload($className) {
  
    $filename = $className . ".php";
   
    if (is_readable($filename)) {
       
        require $filename;
    }
}
//wzorce
//di, factory, decorator
$factory = new Factory(new HtmlFile());
$file = $factory->create();
echo $file->render();
$colorDecorator = new ColorDecorator($file);
echo $colorDecorator->render();