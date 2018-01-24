<?php
/**
 * Created by PhpStorm.
 * User: vanja
 * Date: 24.1.18.
 * Time: 13.27
 */
/**
 * In certain cases, it is better to approach methods and properties of a class without the need to create
an object out of the class. This can be achieved by defining the methods and properties of a class as
static. Even though the use of static methods and properties is considered a bad practice, there are
cases in which their use is quite handy and justified.
 */
/**
 * In order to approach static methods and properties we use the scope resolution operator (::).
 */
/**
 * The main cases in which we consider the use of static methods and properties are when
we need them as counters and for utility classes.
 */
/**
 * 12.1 The use of static methods and variables is appropriate in the following cases:
A : Whenever we want to use a class’s method without instantiation.
B : For utilities such as conversion between units of measurements, sanitation, encryption,
etc.
C : When we would like to unit test our code.
D : When our code is static.
 */
//Example:
//Use case 1: as counters
class Utilis {
// Hold the number of cars.
    static public $numberOfCars = 0;
// Add 1 to the number of cars each time the method is called.
    static public function add1ToCars()
    {
        self::$numberOfCars++;
    }
}
echo Utilis::$numberOfCars;

Utilis::add1ToCars()
echo Utilis::$numberOfCars;

Utilis::add1ToCars();
echo Utilis::$numberOfCars;

Utilis::add1ToCars();
echo Utilis::$numberOfCars;
//Result:
//0
//1
//2
//3

//Use case 2: for utility classes
class Utilis {
// The method uses PHP's header function
// to redirect the user.
    static public function redirect($url)
    {
        header("Location: $url");
        exit;
    }
}
Utilis::redirect("http://www.phpenthusiast.com");