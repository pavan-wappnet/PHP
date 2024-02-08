<?php

class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info(){
        echo "<h3>Employee Profile </h3>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Age: " . $this->age . "<br>";
        echo "Employee Salary: " . $this->salary . "<br>";

    }
}

class manager extends employee{
    public $ta = 1000;
    public $phone = 300;
    public $totalsalary;

    function info(){
        $this->totalsalary = $this->salary + $this->phone + $this->ta;

        echo "<h3>Manager Profile </h3>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Age: " . $this->age . "<br>";
        echo "Employee Salary: " . $this->totalsalary . "<br>";

    }
}

$e1 = new manager("Pavan", 21, 15000);
$e2 = new employee("Dhruv", 18, 2000);
$e1->info();
$e2->info();



?>