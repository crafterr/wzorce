<?php

class ProxyUser implements UserInterface
{
    protected $user;
    public function __construct() {
        $this->user = new User();
    }
    
    public function setFirstname($firstname){
        $this->user->setFirstname($firstname);
    }
    
    public function setLastname($lastname) {
        $this->user->setLastname($lastname);
    }
    
    public function getFirstname() {
        return $this->user->getFirstname();
    }
    
    public function getLastname() {
        return $this->user->getLastname();
    }
    
    public function save() {
        return $this->user->save();
    }
    
    public function delete() {
        return $this->user->delete();
    }
}

?>