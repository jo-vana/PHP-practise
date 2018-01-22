<?php
/**
 * Created by PhpStorm.
 * User: vanja
 * Date: 22.1.18.
 * Time: 09.45
 */
/**
 * 4.1 We use the private access modifier in order to:
A : Limit the access to a class.
B : Limit the access to properties.
C : Limit the access to methods.
D : B+C***
 */
class User {
    private $firstName;

    public function setFirstName($val) {
        $this ->firstName = $val;
    }

    public function getFirstName() {
        return $this ->firstName;
    }

}

$user1 = new User();

$user1 -> setFirstName("Jenny");

echo $user1 -> getFirstName();