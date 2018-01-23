<?php
/**
 * Created by PhpStorm.
 * User: vanja
 * Date: 23.1.18.
 * Time: 12.24
 */
/**
 * Interfaces resemble abstract classes in that they include abstract methods that the programmer
must define in the classes that inherit from the interface.
 */
/**
 * An interface commits its child classes to abstract methods that they should implement.
 */
/**
 * We declare an interface with the interface keyword and, the class that inherits from an interface
with the implements keyword.
 */
class  User {
    protected $username;

    public function setusername($name) {
        $this ->username = $name;
    }
    public  function getusername() {
        return $this -> username;
    }
}
interface  Author {

    public function setAuthorPrivileges($array);

    public  function getAuthorPrivileges();

}
interface Editor {

    public  function setEditorPrivileges($array);

    public  function getEditorPrivileges();

}
class AuthorEditor extends User implements Author,Editor {

    private $authorPrivilegesArray = array();
    private $editorPrivilegesArray = array();

    public function setAuthorPrivileges($array) {
        $this -> authorPrivilegesArray = $array;
    }

    public  function getAuthorPrivileges() {
        return $this -> authorPrivilegesArray;
    }

    public  function setEditorPrivileges($array) {
        $this -> editorPrivilegesArray = $array;
    }

    public  function getEditorPrivileges() {
        return $this ->editorPrivilegesArray;
    }
}
$user1 = new AuthorEditor();
$user1 -> setusername("Balthazar");
$user1 -> setAuthorPrivileges(array(" write text", "add punctuation"));
$user1 -> setEditorPrivileges(array(" write text", "add punctuation"));

//echo $user1 ->getusername();
//echo $user1 ->getAuthorPrivileges();
$userName = $user1 -> getusername();
$userPrivileges= array_merge($user1 ->getAuthorPrivileges(), $user1 -> getEditorPrivileges());
echo $userName . " has the following privileges: ";
foreach ($userPrivileges as $priv) {
    echo " {$priv},";
}