<?php
$txt = "Hello world!";  # Type String
$x = 5;                        # Type int
$y = 10.5;    # Type Float
$z = true; # Type Boolean
$lang = array("Python", "JS", "PHP", "HTML", "CSS");   #Type Array
$null = null;


var_dump($x);    #Example1     output = int(5)
echo "<br>";
var_dump($y);   #Example2      output = float(10.5)
echo "<br>";
var_dump($z);   #Example3      output = bool(true)
echo "<br>";
var_dump($lang);    #Example4  output = array(5) { [0]=> string(6) "Python" [1]=> string(2) "JS" [2]=> string(3) "PHP" [3]=> string(4) "HTML" [4]=> string(3) "CSS" }
echo "<br>";
var_dump($txt);     #Example5  output = string(12) "Hello world!"
echo "<br>";
var_dump($null);    #Example6  output = NULL
echo "<br>";


#Example 7 (changing data type)
$a = 5;
$a = (string) $a;
var_dump($a);        #output = string(1) "5"
echo "<br>";     

#Example of Object
class Car{
    public $color;
}
?>