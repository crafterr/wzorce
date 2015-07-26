<?php
$funkcja = function($param) {
  return $param;  
};
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
  
    require $fileName;
}
spl_autoload_register('autoload');

echo $funkcja('adam ma kota');

$factory = new \Square\ConcreteCreator();
$triangle = $factory->factoryMethod(new \Square\Triangle());
var_dump($triangle);
$circle = $factory->factoryMethod(new \Square\Circle());
var_dump($circle);