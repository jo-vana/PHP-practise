<?php
/**
 * Created by PhpStorm.
 * User: vanja
 * Date: 19.1.18.
 * Time: 20.55
 */

class User {
    public $firstName;
    public $lastName;


    public function registered() {
        echo $this -> firstName ." ". $this -> lastName." registered" ;
        return $this;
    }

    public function mail() {
        echo " emailed.";
    }
}

$user1 = new User();
$user1 -> firstName = "Jane";
$user1 -> lastName = "Roe";

echo $user1 -> registered() -> mail();