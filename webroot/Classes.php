<?php
/**
 * Created by PhpStorm.
 * User: vanja
 * Date: 18.1.18.
 * Time: 16.24
 */

/**
 * 1.1 Which of these definitions best explains the term ‘class’?
    A: Groups the code that is related to a certain topic.**
    B: Sets and gets the class own properties and methods.
    C: Is the embodiment of a real life object.
 */
/**
 *1.2 Which of these definitions best explains the term ‘object’?
    A: Groups the code that is related to one topic.
    B: A variable within a class.
    C: A function within a class.
 */
/**
 * 1.3 Which of these definitions best explains the term ‘property’?
    A: Groups the code that is related to one topic.
    B: A variable within a class.***
    C: A function within a class.
 */
/**
 * 1.4 Which of these definitions best explains the term ‘method’?
    A: A function within a class.***
    B: A variable within a class.
    C: The embodiment of a real action
 */

class User {
    public $firstName;
    public $lastName;

    public function hello() {
        return "Hello";
    }
}

$user1 = new User();
$user1 -> firstName = "John";
$user1 -> lastName = "Doe";

//echo $user1 ->firstName. " ". $user1 -> lastName;

$hello = $user1->hello();

echo $hello . ", " . $user1 ->firstName. " ". $user1 -> lastName;

$user2 = new User();
$user2 -> firstName = "Jane";
$user2 -> lastName = "Doe";

$hello = $user2->hello();

echo $hello . ", " . $user2 ->firstName. " ". $user2 -> lastName;