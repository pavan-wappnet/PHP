<?php
#EROOR HANDLING

#using die function 
  if(!file_exists("hello.txt")){
    die("File not found");
  }
else{
    $File = fopen("hello.txt", "r");
} 
echo "<br>";

#using custom error handling function
function customError($err_level, $err_msg) {
  echo "<b>Error:</b> $err_level, $err_msg";
}
set_error_handler("customError");
echo($test);                                          #Error: 2, Undefined variable $test
echo "<br>";

#trigger an error
$test = 2;
if ($test>=1) {
    trigger_error("Value must be 1 or below");        #Notice: Value must be 1 or below in D:\Wappnet Systems\PHP\12_error_handling.php on line 25
  }
echo "<br>";

#Sending an e-mail for error

//error handler function
function customError2($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Webmaster has been notified";
  error_log("Error: [$errno] $errstr",1,
  "noreply@sfolkar.com","From: webmaster@example.com");
}
set_error_handler("customError2",E_USER_WARNING);

$test=2;
if ($test>=1) {
  trigger_error("Value must be 1 or below",E_USER_WARNING);
}
?>