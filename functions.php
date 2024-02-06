<?php
#EXAMPLE 1

function message() {
    echo "Hello World";
}


$viewMessage = message();
echo $viewMessage;

echo "<br>";
echo "<br>";

#EXAMPLE 2

function familyName($fname) {
    echo "$fname Ambani <br>";
}

familyName("Mukesh");
familyName("Neeta");
familyName("Anant");
familyName("Akash");

echo "<br>";


#EXAMPLE 3
function cricketer($fname, $role) {
    echo "$fname => $role <br>";
  }
  
  cricketer("Rohit Sharma", "Opening Batsmen");
  cricketer("Virat Kohli", "One Down Batsmen");
  cricketer("Jasprit Bumrah", "Fast Bowler");


echo "<br>";

#EXAMPLE 4
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight(); // use the default value of 50
  setHeight(135);
  setHeight(80);

echo "<br>";

#EXAMPLE 5
function sum($x, $y) {
    return $x + $y;
  }
  
  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4);


echo "<br>";

#EXAMPLE 6
function add(&$value){              # & is used for pass-by-reference
    $value += 6;
}

$num = 4;
add($num);
echo $num;

echo "<br>";
echo "<br>";

#EXAMPLE 7  (ARROW FUNCTIONS)
$arr = [1, 2, 3, 4, 5, 6, 7]; 

$sum = array_map(fn($n) => $n * 2, $arr ); 
print_r($sum); 

echo "<br>";

#EXAMPLE 8 (date time function)

date_default_timezone_set('Asia/Kolkata');

$timestamp = time(); 

$dateString = date('d-m-Y H:i:s', $timestamp);

echo "Current date and time: $dateString";        

echo "<br>";

#EXAMPLE 9

$value_arr = [5, 6, 11, 67];

$max_arr = max($value_arr);      #returns the max value 
echo $max_arr;

echo "<br>";

$float = 5.6;

$round_float = round($float);     #round of the float values
echo $round_float;

?>