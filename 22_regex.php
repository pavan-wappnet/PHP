<?php
#preg_match function

$string = "PHP is the web scripting language and phhhhhhhp is used by many people in world?????/*5613.-?";

$exp = preg_match("/web/i", $string);
$exp = preg_match_all("/php/i", $string, $array);
$exp = preg_match_all("/php|web|and/i", $string, $array);
$exp = preg_match_all("/\s/", $string, $array);


if($exp){
    echo "A match is found";
}
else{
    echo "A match was not found";
}

echo "<br>";
echo"<pre>";
print_r($array[0]);
echo"</pre>";


#preg_replace function 
$string2 = "<h1>PHP is the web scripting language and php is used by many people.</h1>";

$pattern = "/php/i";

$replacement = "JS";

echo preg_replace($pattern, $replacement, $string2);

?>
