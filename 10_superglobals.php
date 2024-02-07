<?php
/*
Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/


#$GLOBALS  (to access a pre defined variable)
$x = 10; // Global variable

function example() {
    $x = 20;     #local variable
    echo "Local variable x: $x<br>";                     #will give output 20 (local varible)
    echo "Global variable x: {$GLOBALS['x']}<br>";       #will give output 10 
    $GLOBALS['x'] = 30;          #change the value using globals variable 
    echo "Updated global variable x: $x";
}
example();
echo "<br><br>";

#$_SERVER (holds information about headers, paths and script locations)

echo $_SERVER['PHP_SELF'] ."<br>";
echo $_SERVER['SERVER_NAME'] ."<br>";
echo $_SERVER['SERVER_SOFTWARE'] ."<br>";
echo $_SERVER['HTTP_HOST'] ."<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br><br>";


#$_GET (to store a data from a one file to another file)
  
    #Example of this method is in GET and POST folder

#$_POST ()

    #Example of this method is in GET and POST folder 


#$_REQUEST (Contains submitted form data, and all cookie data)
    #Example of this method is in GET and POST folder
#$_FILES (contains data of file)
    #Example of this method is in file_uplaod.php  

#$_ENV (to upload environmental files)

?>