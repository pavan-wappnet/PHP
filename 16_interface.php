<?php

interface parent1{
    
    function calc($a, $b);        
     #we can't use access modiefiers in interface
}

interface parent2{
    
    function sub($c, $d);
}


#interface is used to implement 2 or more class's method in one calss

class childclass implements parent1, parent2{
    public function calc($a, $b){
        echo $a + $b . "<br>";
    }
    public function sub($a, $b){
        echo $a - $b . "<br>";
    }
}

$test = new childclass();
$test->calc(10,20);
$test->sub(30,10);

?>
