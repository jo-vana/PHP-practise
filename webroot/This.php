<?php
/**
 * Created by PhpStorm.
 * User: vanja
 * Date: 19.1.18.
 * Time: 19.55
 */

/**
 * 2.1 Which keyword would you use in order to approach the class properties and methods
from within the class?
    A: The new keyword.
    B: The class keyword.
    C: The $this keyword.***
 */

class User {
    public $firstName;
    public $lastName;

    public function hello() {
        return "Hello " .$this -> firstName;
    }
}

$user3 = new User();
$user3 -> firstName = "Jonnie";
$user3 -> lastName = "Roe";

echo $user3 -> hello();

