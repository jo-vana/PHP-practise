<?php
/**
 * Created by PhpStorm.
 * User: vanja
 * Date: 24.1.18.
 * Time: 15.08
 */
/**
 * PHP allows a class to inherit from only a single parent class, but sometimes we cannot escape the
necessity to use code from more than one resource. In these cases, it is common to chain more and
more parents. However, this can easily get quite complicated and it is considered a good practice not
to exceed beyond an inheritance tree of three generations. Another common practice is to include
the code that we would like to share between the classes by using the ‘include’ or ‘require’ PHP
built-in functions.
 */
/**
 * Once we create a trait, we can use it in other classes with the use keyword.
 * A class can use more than one trait, after all, this is what traits were invented for.
 */

/**
 * EXAMPLE
 * // The first trait
trait Price {
public function changePriceByDollars($price, $change)
{
return $price + $change;
}
}
// The second trait
trait SpecialSell {
public function annonunceSpecialSell (){
return __CLASS__ . " on special sell";
}
}
// The class uses both traits
class Mercedes {
use Price;
use SpecialSell;
}
$mercedes1 = new Mercedes();
// Subtract 2100$
echo $mercedes1 -> changePriceByDollars(42000, -2100);
echo $mercedes1 -> annonunceSpecialSell();
Result:
39900
Mercedes on special sell
 */
interface User {

}
class Author implements User {
    use Writing;
    public function writeContent() {
        return "Author, please start typing your comment...";
    }
}
class Commentator implements User {
    use Writing;
    public function writeContent() {
        return "Commentator, please start typing your comment...";
    }

}
class Viewer implements  User {

}
trait Writing {
    abstract public function writeContent();
}
$author1= new Author();
echo $author1 ->writeContent();
echo "<br/>";
$comentator1 = new Commentator();
echo $comentator1 ->writeContent();
