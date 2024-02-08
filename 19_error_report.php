<?php
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

// Enable all error reporting
error_reporting(E_NOTICE);

// Attempt to use an undefined variable
echo $undefinedVariable;
?>