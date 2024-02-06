<?php
#IF-ELSE 

if (5 > 3) {
  echo "Have a good day!";
  echo "<br>";
}

#EXAMPLE 1

$a = 5;
$b = 6;

if($a > 5) {
  echo "Good Morning";
}
else if($a = 5) {
  echo  "Good Afternoon";
}
else{
  echo "Good Evening";
}

echo "<br>";

#EXAMPLE 2

$x = 80;
$y = 50;
$z = 100;

if($x > $y && $y < $z){
  echo "Both the condition are true";
}

echo "<br>";

if($x > $y || $y > $z){
  echo "One of the conditon are true";
}

#EXAMPLE 3

echo "<br>";

$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}

echo "<br>";


#SWITCH CASE


#EXAMPLE 1

$color = "green";

switch ($color) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

echo "<br>";

#EXAMPLE 2
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

?>