<?php
/**
 * Created by PhpStorm.
 * User: vanja
 * Date: 23.1.18.
 * Time: 14.41
 */

/**
 * Class User9.1 Which of these sentences best defines the polymorphism principle in PHP?
A : Methods that serve the same functionality in different classes should have the same
name.***
B : The same function can have many names.
C : Is the Greek term for inheritance.
D : Can be implemented in most of the modern programming languages.
 */

abstract class User {

    protected $scores = 0;
    protected $numberOfArticles = 0;

    public  function setNumberOgArticles($int) {
        $numberOfArticles = (int)$int;
        $this -> numberOfArticles = $numberOfArticles;
    }
    public  function getNumberOfArticles() {
        return $this ->numberOfArticles;
    }

    abstract public function calcScores();
}
class Author extends User {
    public function calcScores() {
        return $this ->scores=
        $this -> numberOfArticles * 10 + 20;
    }
}
class  Editor extends User {
    public function calcScores() {
        return $this -> scores =
            $this -> numberOfArticles * 6 + 15;
    }
}
$author1 = new Author();
$author1 ->setNumberOfArticles(8);
echo $author1 -> calcScores()."\n";

$editor1 = new Editor();
$editor1 ->setNumberOgArticles(15);
echo $editor1 -> calcScores();

//abstract class User {
//    protected $scores = 0;
//    protected $numberOfArticles = 0;
//    public function setNumberOfArticles($int) {
//
//        $numberOfArticles = (int)$int;
//        $this -> numberOfArticles = $numberOfArticles;
//
//    public function getNumberOfArticles() {
//        return $this -> numberOfArticles;
//    }
//
//    abstract public function calcScores();
//}
//class Author extends User {
//    public function calcScores()
//    {
//        return $this -> scores =
//            $this -> numberOfArticles * 10 + 20;
//    }
//}
//class Editor extends User {
//    public function calcScores()
//    {
//        return $this -> scores =
//            $this -> numberOfArticles * 6 + 15;
//    }
//}
//$author1 = new Author();
//$author1 -> setNumberOfArticles(8);
//echo $author1 -> calcScores();