<?php
/**
 * Created by PhpStorm.
 * User: vanja
 * Date: 22.1.18.
 * Time: 19.19
 */
/**
 * We use abstract classes when we want to commit the programmer (either oneself or someone else)
to write a certain class method, but we are only sure about the name of the method, and not the
details of how it should be written.
 */
/**
 * In these kinds of cases, when we need to commit the child classes to
certain methods that they inherit from the parent class but we cannot commit about the code that
should be used in the methods, we use abstract classes.
 */
/**
 * An abstract class is a class that has at least one abstract method. Abstract methods can only have
names and arguments, and no other code.
 */
/**
 * Since we cannot create objects from abstract classes, we need to create child classes that inherit
the abstract class code.
 */

/**
 * Class UserThe main reason for using an abstract class is to commit the child classes to methods.
 */
abstract class User {;
    abstract public  function stateYourRoll()

    public function setUsername ($name) {
        $this -> username = $name;
    }
    public function getUsername() {
        return $this ->username;
    }
}

class Admin extends User {
    public  function stateYourRoll() {
        return "admin";
    }
}
$admin1 = new Admin();
$admin1 ->setUsername("Baltazar");
echo $admin1 ->stateYourRoll();
class Viewer extends User {
    public  function stateYourRoll() {
        return strtolower(__CLASS__);
    }
}