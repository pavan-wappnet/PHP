<?php
//Polymorphism is achieved through method overriding, where a subclass   provides a specific implementation of a method defined in its superclass 

//Example of Polymorphism
class animal{
    public function makesound(){
        echo "<br>animal make sound <br>";
    }
}

class dog extends animal{
    public function makesound(){ //method override from the superclass
        echo "<br>dog make sound<br>";
    }
}

class cat extends animal{
    public function makesound(){
        echo "<br>cat make sound<br>";
    }
}
//Creating new object 
$animal = new Animal();
$dog = new Dog();
$cat = new Cat();

echo $animal->makesound();
echo $dog ->makesound();
echo $cat->makesound();

?>