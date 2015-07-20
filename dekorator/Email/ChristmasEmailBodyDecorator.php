<?php


class ChristmasEmailBodyDecorator extends EmailBodyDecorator
{
    public function loadBody() {
        echo 'this is extra content for christmass';
        $this->emailBody->loadBody();
    }
}

?>