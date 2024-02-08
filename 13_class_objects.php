<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Cricket {
    public $name;
    public $role;
    public $runs;

    #we can initialize the functions using construct method without adding differnt methods of set function
    
    #construct method
    function __construct($name, $role, $runs){
        $this->name = $name;
        $this->role = $role;
        $this->runs = $runs;
    }

    /*
    #set value function
    function set_name($name) {
        $this->name = $name;
    }
    function set_role($role) {
        $this->role = $role;
    }
    function set_runs($runs) {
        $this->runs = $runs;
    }
    */

    
    #get value functions
    function get_name() {
        return $this->name;
    }
    function get_role() {
        return $this->role;
    }
    
    function get_runs() {
        return $this->runs;
    }
}


#player1
$player = new Cricket('Virat Kohli', 'Batsmen', '26,532');

#use this calling method for set function
/*
$player->set_name ('Virat Kohli');
$player->set_role ('Batsmen');
$player->set_runs ('26,532');
*/

#player2 
$player2 = new Cricket('Rohit Sharma', 'Opening Batsmen', '18,239');

#use this calling method for set function
/*
$player2->set_name('Rohit Sharma');
$player2->set_role ('Opening Batsmen');
$player2->set_runs ('18,239');
*/

echo "Name: ". $player->get_name();
echo "<br>";
echo "Role: " . $player->get_role(); 
echo "<br>";
echo "International Runs: " . $player->get_runs(); 
echo "<br>";
echo "<br>";
echo "Name: ". $player2->get_name();
echo "<br>";
echo "Role: " . $player2->get_role(); 
echo "<br>";
echo "International Runs: " . $player2->get_runs(); 
echo "<br>";
?>

</body>
</html>