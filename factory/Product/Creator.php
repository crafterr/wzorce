<?php


class Creator implements CreatorInterface
{
    public static function create($class) {
      if (class_exists($class)) {
        return new $class;
      } else {
          throw new Exception("Podana klasa nie istnieje");
      }
       
    }
}

?>