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

    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_role($role) {
        $this->role = $role;
    }
    function get_role() {
        return $this->role;
    }
    function set_runs($runs) {
        $this->runs = $runs;
    }
    function get_runs() {
        return $this->runs;
    }
}

$player = new Cricket();
$player->set_name ('Virat Kohli');
$player->set_role ('Batsmen');
$player->set_runs ('26,532');


$player2 = new Cricket();
$player2->set_name('Rohit Sharma');
$player2->set_role ('Opening Batsmen');
$player2->set_runs ('18,239');


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