<?php 
#const keyword
const MYDREAMCAR = "Nissan GTR";
echo MYDREAMCAR;
echo "<br><br>";


#define a variable 
#Exaomple 1
define("GREETING", "Welcome to my site");
echo GREETING;
echo "<br><br>";

#Example 2
define("cars", ["BMW", "JEEP", "NEXON"]);
echo cars[2];
echo "<br><br>";

#Example 3
define('DEBUG_MODE', true);
if (defined('DEBUG_MODE')) {           #we use to check if a constant is used or not
    echo "Debug mode is enabled.";
}
echo "<br><br>";

#Example 5
define("Hello", "This is an hello word");
function myWord() {
    echo Hello;
}
return myWord();
echo "<br><br>";

#NOTE
/*
const vs. define()

const are always case-sensitive
define() has a case-insensitive option.
const cannot be created inside another block scope, like inside a function or inside an if statement.
define can be created inside another block scope. */
?>