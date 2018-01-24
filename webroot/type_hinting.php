<?php
/**
 * Created by PhpStorm.
 * User: vanja
 * Date: 24.1.18.
 * Time: 09.16
 */
/**
 * Type hinting forces our functions and methods to get only arguments that belong to a specific class,
a specific interface, or to arrays.
 */
/**
 * When we would like to force a function to get only arguments of the type array, we can put the
keyword array in front of the argument name, with the following syntax:
    function functionName (array $argumentName) {
        //code
    }
 */
/**
 * Type hinting can also be used to force a function to get an argument of type Object. For this purpose,
we put the name of the class in front of the argument name in the function.
 */

interface User {
    public  function setUserName($userName);
    public  function getUserName();

    public  function setGender($gender);
    public  function getGender();
}
class Commentator implements User {
    private $userName = " ";
    private $gender = "none of your business!";

    public function setUserName($name) {
        $this -> userName = (is_string($name))? $name: "N/A";
    }
    public function getUserName() {
        return $this -> userName;
    }


    public function setGender($gender) {
        $gendersArray =array("female", "male", "other");
        if(in_array($gender, $gendersArray)) {
            $this -> gender = $gender;
        }
    }
    public function getGender() {
        return $this ->gender;
    }
}
function addMrOrMrsToUsername(User $user) {                 //hint
    $userName= $user -> getusername();
    $userGender = $user -> getGender();

    if ($userGender === "female") {
        return "Mrs. ".$userName;
    }
    elseif ($userGender === "male") {
        return "Mr. ".$userName;
    }
    return $userName;
}

$user1 = new Commentator();
$user1 ->setUserName("Jane");
$user1 ->setGender("female");
echo addMrOrMrsToUsername($user1);
echo "<br/>";
$user2 = new Commentator();
$user2 ->setUserName("Joe");
$user2 ->setGender("male");
echo addMrOrMrsToUsername($user2);