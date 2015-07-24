<?php


class Proxy implements SubjectInterface
{
    private $realSubject;
    
    public function doSomething() {
        if ($this->realSubject === null) {
            echo 'Proxy';
            $this->realSubject = new RealSubject();
        }
        $this->realSubject->doSomething();
    }
}

?>