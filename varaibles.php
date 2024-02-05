<?php
$txt = "Hello world!";  # Type String
$x = 5;                        # Type int
$y = 10.5;    # Type Float
$z = true; # Type Boolean
$lang = array("Python", "JS", "PHP", "HTML", "CSS");   #Type Array

#Example 1

$text = "Pavan";
echo "My name is $text ", "<br>";
echo "My name is " . $text . " & Welcome to my page"; 


#Example 2
$a = 5;
$b = 6;

echo $b - $a, "<br>";
echo $b + $a, "<br>";
echo $b * $a, "<br>";
echo $b / $a, "<br>";


#Example 3
print_r($lang[0]);  
echo "<br>";
var_dump($a);       #var_dump shows value with type, same goes for print_r


#Example 4

$obj = ([2, 3, 6]);
echo "<br>";
var_dump($obj);

#Example 5

$x = $y = $z = "Fruit";
echo $z;
?>