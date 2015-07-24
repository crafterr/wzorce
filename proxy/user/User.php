<?php

class User implements UserInterface
{
    
    protected $firstname;
    protected $lastname;
 /**
     * @return the $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

 /**
     * @return the $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

 /**
     * @param field_type $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

 /**
     * @param field_type $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    
    public function save() {
        
    }
    
    public function delete() {
        
    }


    
}

?>