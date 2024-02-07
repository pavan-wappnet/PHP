<?php
#WHILE LOOPS

#EXAMPLE 1

$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}

echo "<br>";

#EXAMPLE 2
$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}

echo "<br>";

#EXAMPLE 3;
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}

echo "<br>";

#EXAMPLE 4;
$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;      #ALRERNATIVE SYNTAX

echo "<br>";

#DO-WHILE LOOP

$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);

echo "<br>";

#FOR - LOOP

for ($x = 0; $x <= 5; $x++) {
#    if ($x == 2)  break;
     if ($x == 2) continue;
    echo "The number is: $x <br>";
}

echo "<br>";

#FOR - EACH LOOPS
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $x) {
#    if ($x == "green") break;
     if ($x == "green") continue;
  echo "$x <br>";
}

#EXAMPLE 2
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
    if ($x == "blue") $x = "pink";
}
var_dump($colors);

?>