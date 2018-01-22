<?php
/**
 * Created by PhpStorm.
 * User: vanja
 * Date: 22.1.18.
 * Time: 15.04
 */
/**
 * 6.1 Which keyword do we use in order to declare that one class inherits from another class?
A : extends in the parent
B : extends in the child***
C : extends in both the child and the parent
 */
/**
 * 6.2 Which keyword do we use in order to declare that a method or property can only be
used within the parent class and its child classes?
A : private
B : protected***
C : public
 */
class User {
    protected $username;

    public function setUsername($name) {
        $this -> username = $name;
    }
}

class Admin extends User {

    public function expressYourRoll() {
        return strtolower(__CLASS__);
    }

    public  function sayHello() {
        return "Hello admin,".$this -> username;
    }

}
$admin1 = new Admin();
$admin1 -> setUsername("Balthazar");
echo $admin1 ->sayHello();