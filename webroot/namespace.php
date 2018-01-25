<?php
/**
 * Created by PhpStorm.
 * User: vanja
 * Date: 25.1.18.
 * Time: 11.21
 */
/**
 * We’ll start by creating an index.php file in the root directory of our site.
Next, we will create a class with the name of Car that sits in the libraries/library1 folder, as follows:
/libraries/library1/CarIntro.php
 */
/**
 * Now, we can write the CarIntro class within the CarIntro.php file:
class CarIntro {
public function sayHello() {
return "beep!"; }
}
 * We define a namespace at the very top of the page, and before any other code, with the namespace
keyword.
For example, the library1 namespace:
 * <?php
        namespace \libraries\library1;
 *
        class CarIntro {
        public function sayHello() {
            return "beep!";
            }
        }
 */
/**
 * After we have created the code library in a namespace, we need to some how integrate the library
into our code. For instance, we may want to use the library in the index.php file. So, in index.php,
we need to do two things: * First, we need to include the library and then import the namespace
with the use keyword.
 *
 * <?php
// 1. require the namespaced file
    require "libraries/library1/CarIntro.php";
// 2. Import the namespace
    use libraries\library1;
 *
//Once we import the namespace, we can use the class that the namespace contains:
 *$carIntro1 = new libraries\library1\CarIntro();
    echo $carIntro1 -> sayHello();
 *
 */
/**
 * We can also give the namespace a friendly name (also known as aliasing) by using the as keyword
with the following syntax:
 * <?php
// 1. require the file
    require "libraries/library1/CarIntro.php";
// 2. import the namespace and give it a friendly name
    use libraries\library1 as car;
// 3. call the class from the namespace with the friendly name
    $carIntro1 = new car\CarIntro();
    echo $carIntro1 -> sayHello();
 */
/**
 * We can use as many namespaces as we need in our files.
 */