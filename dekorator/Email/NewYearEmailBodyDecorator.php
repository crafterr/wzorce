<?php


class NewYearEmailBodyDecorator extends EmailBodyDecorator
{
    public function loadBody() {
        echo 'this is extra content for new york';
        $this->emailBody->loadBody();
    }
}

?>