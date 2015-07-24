<?php

interface UserInterface
{
    public function getFirstname();
    public function setFirstname($firstname);
    public function getLastname();
    public function setLastname($lastname);
    public function save();
    public function delete();
    
}

?>