<?php

abstract class parentclass{
    public $name;

    abstract protected function calc($a, $b);
}

class childclass extends parentclass {
    public function calc($a, $b){
        echo $a + $b;
    }
}

$test = new childclass();

$test->calc(10,20);

?>