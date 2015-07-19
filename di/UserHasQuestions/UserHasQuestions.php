<?php
namespace UserHasQuestions;

class User
{
    private $firstname;
    private $lastname;
    
    public function __construct($firstname, $lastname) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    
    public function getFirstName() {
        return $this->firstname;
    }
    
    public function getLastName() {
        return $this->lastname;
    }
}

class Question {
    protected $user;
    protected $question;
    
    public function __construct(User $user, $question) {
        $this->user = $user;
        $this->question = $question;
    }
    
    public function getUser() {
        return $this->user;
    }
    public function getQuestion() {
        return $this->question;
    }
}

$user1 = new User("Adam","Pietras");
$user2 = new User("Marcin","Kowalski");
$user3 = new User("Kamil", "Biernacki");

$question1 = new Question($user2,"pytanie 1 - ile to jest 1+1");
$question2 = new Question($user1,"Pytanie 2 - ile to jest 2+2");
$question3 = new Question($user3, "Pytanie 3 - ile to jest 3+3");


echo $question2->getUser()->getFirstName().' '.$question2->getUser()->getLastName();
echo $question2->getQuestion();

?>