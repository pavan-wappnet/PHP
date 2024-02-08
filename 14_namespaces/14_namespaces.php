<?php

#we use namespace for using same name for multiple class

require '14_first.php';
require '14_second.php';

function wow(){
    echo "This is an wow function <br>";
}

$obj = new first\Product();
$obj2 = new second\Test();


first\wow();
?>