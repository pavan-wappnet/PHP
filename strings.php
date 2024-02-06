<?php
#Single Quotation

$x = "!";
$string = 'Hello World $x';     #output will be Hello World $x (Singe Quotation will not consider $x as string)
echo $string;

echo "<br>";
echo "<br>";

#Double Quotation

$str2 = 'I am from Mehsana';
# $str = "My name is Pavan and $str2";
$str = "My name is Pavan and ". $str2;  #second method to concat string
echo $str;

echo "<br>";
echo "<br>";

#1 String Length
$text = "Shree Ram";
echo strlen($text);      #output 9

echo "<br>";

#2 Word Count
echo str_word_count($text); #output 2

echo "<br>";

#3 search for word
#23 stripos (case-insensitive)
echo strpos($text, "R"); #output 6

echo "<br>";

#4 Upper Case
echo strtoupper($text); #output SHREE RAM

echo "<br>";

#5 lower Case
echo strtolower($text); #output shree ram

echo "<br>";

#6 Replace String
echo str_replace("Ram", "Krishna", $text);   #output Shree Krishna  (ireplace is case-insensitive)

echo "<br>";

#7 reverse the string 
$txt = "new string";
echo strrev($txt);          #output = gnirts wen

echo "<br>";

#8 remove whitespaces
$txt = " hello sir!    ";
echo trim($txt);

echo "<br>";

#9 string to array
$x = "Jai Hind";
$y = explode(" ", $x);  #output = Array ( [0] => Jai [1] => Hind )
print_r($y);

echo "<br>";
#10 array to string
$x = array("Hello", "World");
$y = implode(" ", $x);
print_r($y);

echo "<br>";

#11 sllicing the string
$a = "This is the new string";
echo substr($a, 11, 4);   #output = new
echo "<br>";
echo substr($a, 11);     #output = new string
echo "<br>";
echo substr($a,-6);     #ouput = string (use negative length for omit the characters)
echo "<br>";

#12 str_pad
$text = "Hello World";
echo str_pad($text, 40, "!");   #output = Hello World!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
echo "<br>";

#13 first char capital
$string = "new world";
echo ucfirst("$string");     #output = New world
echo ucwords($string);       #output = New World
echo "<br>";

#14 lcfirst will be used to lower the first char
#15 repeat the word
echo str_repeat("new\n", 40); 

echo "<br>";

#16 shuffle the char
echo str_shuffle($string);

echo "<br>";

#17  nl2br() => insert the break line when new  line occurs

#18 Compare two strings(case insensitive)
echo strcasecmp("HELLO WORLD!", "hello world!");     #if output is 0 then the both the strings are equal

echo "<br>";

#19 stristr (case-insensitive) and strstr (case-sensitive)

#20 change the characters
$new = "level 0";
echo strtr($new, "0", "1");

echo "<br>";

#20 strcoll is depend on locale settings
echo strcoll("HELLO WORLD!", "hello world!");   
echo "<br>";

#22 str_getcsv()
$input = "John,Doe,30\nJane,Smith,25\n";
$data = str_getcsv($input);
print_r($data);
echo "<br>";
echo "<br>";

#21 strcspn => print the index of char 
$txt = "First time";
echo strcspn($txt, "t");
echo "<br>";


#24 strspn() => 
$string = 'abc123def';
$result1 = strspn($string, 'abcdef');
echo $result1;
echo "<br>";

#25 number-format
echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,".", ",");
echo "<br>";

#26 ord() (returns the ASCII value)
echo ord("hello")."<br>";

#27 chr() (returns the chars from ASCII )
echo chr(104)."<br>";

#28 strchr (can use strsstr())
echo strchr("Hello world!","world");
echo "<br>";

#29 strpbrk() => find the char and return the rest of string
echo strpbrk("Hello world!","oH");   # returns firt char in string from both the char and it is case-sensitive 
echo "<br>";
echo "<br>";

#30 wordwrap =>wrap to new line when reachers to specific lenghth
$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>");


echo "<br>";
echo "<br>";

#31 substr_compare()
$str1 = 'apple';
$str2 = 'APPLE';

$result2 = substr_compare($str1, $str2, 0); // Output: 1 (case-insensitive comparison of entire strings)
echo $result2;

echo "<br>";
echo "<br>";

#32 substr_count() 
echo substr_count("Hello world. The world is nice","world");  #output = 2


echo "<br>";
echo "<br>";

#33 substr_replace() (replace the substring)
echo substr_replace("Hello5","2world",0);


echo "<br>";
echo "<br>";

#vfprintf()
$number = 9;
$str = "Beijing";
$file = fopen("test.txt","w");
echo vfprintf($file,"There are %u million bicycles in %s.",array($number,$str));


echo "<br>";
echo "<br>";

#vsprintf()

$format = 'The %s contains %d %s.';
$args = ['basket', 3, 'apples'];

$result = vsprintf($format, $args);
echo $result; // Output: The basket contains 3 apples.

?>