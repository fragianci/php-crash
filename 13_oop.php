<?php

class User {
  // Properties are just variables that belong to a class.
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
  private $name;
  public $email;
  public $password;

  public function __construct($name, $password, $email){
    $this->name = $name;
    $this->password = $password;
    $this->email = $email;
  }

  function set_email($email){
    $this->email=$email;
  }

  function get_email(){
    return $this->email;
  }
}

$user1 = new User('Francesco', 'testa', 'fra@g.com');

// $user1->email='Brad';
// $user1->set_email('Brad');

class Employee extends User{
  public $title;
  public function __construct($name, $password, $email, $title)
  {
    parent::__construct($name, $password, $email);
    $this->title = $title;
  }
  
  public function get_title(){
    return $this->title;
  }

}

$employee = new Employee('Matteo', 'jojo', 'booyee', 'elettrotecnico');



var_dump($employee);
// echo $user1->get_email();

?>