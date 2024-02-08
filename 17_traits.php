<?php
#for using same functions in multiple classes

trait hello{
    public function sayhello(){
        echo "Hello everyone <br>";
    }
}

trait bye{
    public function saybye(){
        echo "Bye everyone <br>";
    }
}

class base1{
    use hello;
    use bye;
}

class base2{
    use hello;
}

$test = new base1();
$test->sayhello();

$test2 = new base2();
$test->sayhello();

$test3 = new base1();
$test3->saybye(); 


?>