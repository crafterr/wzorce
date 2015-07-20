<?php

abstract class EmailBodyDecorator implements EmailBodyInterface
{
    protected  $emailBody;
    public function __construct(EmailBodyInterface $emailBody) {
        $this->emailBody = $emailBody;
    }
    
    abstract public function loadBody();
    
}

?>