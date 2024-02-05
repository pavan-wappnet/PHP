<?php
$txt = "Hello world!";  # Type String
$x = 5;                        # Type int
$y = 10.5;    # Type Float
$z = true; # Type Boolean
$lang = array("Python", "JS", "PHP", "HTML", "CSS");   #Type Array
$null = null;


var_dump($x);    #Example1
echo "<br>";
var_dump($y);   #Example2
echo "<br>";
var_dump($z);   #Example3
echo "<br>";
var_dump($lang);    #Example4
echo "<br>";
var_dump($txt);     #Example5
echo "<br>";
var_dump($null);    #Example6
echo "<br>";


#Example 7 (changing data type)
$a = 5;
$a = (string) $a;
var_dump($a);
echo "<br>";

#Example of Object
class Car{
    public $color;
}
?>