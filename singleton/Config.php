<?php

class Config
{
    private static $instance;
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function getText() {
        return "adam ma kota";
    }
}


$config = Config::getInstance();
var_dump($config->getText()); die();
?>