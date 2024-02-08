<?php

#array()
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


echo "<br>";
echo "<br>";

#count() (count the total elements)
$cars=array("Volvo","BMW","Toyota");
echo count($cars);


echo "<br>";
echo "<br>";


#sizeof (size of the array)
$cars=array("Suzuki","BMW","Toyota", "Tata");
echo sizeof($cars);


echo "<br>";
echo "<br>";

#end and current
$people = array("Sanket", "Dhruv", "Derek", "Pavan");
echo current($people) . "<br>";
echo end($people);                   #returns the value of last element

echo "<br><br>";

#prev and next
$person = array("Sanket", "Pavan", "Dhruv", "Megh");
echo current($person) . "<br>";
echo next($person). "<br>";
echo prev($person);

echo "<br><br>";
#key()
$cousin = array("Snaket", "Pavan", "Dhruv", "Megh", "Ronak");
echo "The key of the current pos is:". key($cousin); 

echo "<br><br>";


#array_keys() (return array containing keys) and array_values (return array containg values)
$car = array("Toyota" => "Supra", "BMW" => "X5", "Nissan" => "GTR");
print_r(array_keys($car));
echo "<br>";
print_r(array_values($car));

echo "<br><br>";

#in_array()  (shows element is in array or not)
$mobille_game = array("BGMI", "CODM", "CR", "COC");
if (in_array("BGMI", $mobille_game)){
    echo "It is an mobile game";
}
else{
    echo "It is not an mobile game";
}

echo "<br><br>";

#array_search (search the value and returns its key)
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("blue",$a); 

echo "<br><br>";

#array_push() (insert value at the end of an array) and #array_pop() (delete the last element)
$egame = array("BGMI", "CR", "FIFA");
array_push($egame, "COD");
print_r($egame);
echo "<br>";
array_pop($egame);
print_r($egame);

echo "<br><br>";

#array_shift() and array_unshift() (remove and delete elements at first pos)
$egame = array("BGMI", "CR", "FIFA");
array_unshift($egame, "CODM");
print_r($egame);
echo "<br>";
array_shift($egame);
print_r($egame);

echo "<br><br>";

#array_merge() (merge two arrays)
$e = array("BGMI", "CR", "FIFA");
$g = array("PUBG", "CS2");
print_r(array_merge($e, $g));

echo "<br><br>";

#array_commbine() (combine key array with value array)
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_combine($fname,$age);
print_r($c);

echo "<br><br>";

#array_flip() (flip all keys with values)
$car = array("Toyota" => "Supra", "BMW" => "X5", "Nissan" => "GTR");
print_r(array_flip($car));

echo "<br><br>";

#array_reverse() (reverse the array)
$egame = array("BGMI", "CR", "FIFA");
print_r(array_reverse($egame));
echo "<br><br>";

#array_slice (slice the array)
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));

echo "<br><br>";
#array_splice() (remove an array elements and replace it with new elements)
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);
echo "<br><br>";

#array_filter (filter the function using callback function)
$array = [1, 2, 3, 4, 5, 6];
function filterEven($value) {
    return $value % 2 == 0;
}
$filteredArray = array_filter($array, 'filterEven');
print_r($filteredArray);
echo "<br><br>";

#array_map() (return new array usinng callback function)
$array = [1, 2, 3, 4, 5];
function square($value) {
    return $value * $value;
}
$squaredArray = array_map('square', $array);
print_r($squaredArray);
echo "<br><br>";

#array_reduce() (returns the string using callback function)
$array = [1, 2, 3, 4, 5];
function sum($carry, $item) {
    return $carry + $item;
}
$total = array_reduce($array, 'sum');
echo $total;
echo "<br><br>";

#array_sum() (return the sum of the array values)
$int = array(5, 7, 8);
echo array_sum($int);
echo "<br><br>";

#array_unique (remove duplicate elements)
$games = array("BGMI", "CR", "CODM", "FIFA", "BGMI", "FIFA");
print_r(array_unique($games));
echo "<br><br>";
echo "<br><br>";


#array_intersect() (returns the common values from 2 arrays)
$a1 = array("car","bike", "sports-car", "sports-bike", "watch");
$a2 = array("watch", "bike", "sneakers");
print_r(array_intersect($a1, $a2));
echo "<br><br>";

#array_diff (return the diff elements of first array from two arrays)
$a1 = array("car","bike", "sports-car", "sports-bike", "watch");
$a2 = array("watch", "bike", "sneakers");
print_r(array_diff($a1, $a2));
echo "<br><br>";

#array_key_exists() check the key exist or not
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
if (array_key_exists("b", $a1)){
    echo "Key Exists";
}
else{
    echo "Key does not exist";
}
echo "<br><br>";

#array_change_key_case() (change the case of the key)
$car = array("Toyota" => "Supra", "BMW" => "X5", "Nissan" => "GTR");
print_r(array_change_key_case($car, CASE_UPPER));
echo "<br><br>";

#array_rand()
$array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'date', 'e' => 'elderberry'];

$randomKey = array_rand($array);
echo $randomKey . "<br>"; #return the random key
$randomKeys = array_rand($array, 3);
print_r($randomKeys);  #return the array with 3 random keys
echo "<br><br>";

#array_column (return the speicfic column)
$data = [
    ['id' => 1, 'name' => 'John', 'age' => 30],
    ['id' => 2, 'name' => 'Jane', 'age' => 25],
    ['id' => 3, 'name' => 'Doe', 'age' => 35]
];
$names = array_column($data, 'name');
print_r($names);
?>