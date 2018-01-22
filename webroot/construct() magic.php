<?php
/**
 * Created by PhpStorm.
 * User: vanja
 * Date: 22.1.18.
 * Time: 13.39
 */
/**
 * When we try to create an object that has a constructor method, we run the risk of our code breaking
if we don’t pass a value to the constructor. In order to avoid this risk, we can define a default value
for the properties that we would like to set through the constructor. The default value may be the
most reasonable choice for the property, zero, an empty string, or even a null.
 */
class User {
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName) {
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
    }

    public function getFullName() {
        return $this -> firstName. " ". $this -> lastName;
    }
}
$user1 = new User("John", "Doe");

echo $user1 ->getFullName();