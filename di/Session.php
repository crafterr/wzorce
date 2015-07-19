<?php
namespace Di;
class Session
{
    public function __construct($name = 'PHP_SESSION') {
        session_name($name);
        session_start();
    }
    public function set($key,$value) {
        $_SESSION[$key] = $value;
    }
    
    public function get($key) {
        return $_SESSION[$key];
    }
    
    public function toArray() {
        return var_dump($_SESSION);
    }
}

class User {
    
    protected $session;
    
    public function __construct(Session $session) {
        $this->session = $session;    
    }
    
    public function setName($name) {
        $this->session->set('name', $name);
    }
    
    public function getName() {
        return $this->session->get('name');
    }
    
}

$session = new Session("Moja sesja");
$user = new User($session);
$user->setName("moj_login");
echo $user->getName();

?>