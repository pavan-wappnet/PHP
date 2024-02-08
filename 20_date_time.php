<?php


#check date
var_dump(checkdate(3, 5, -1200));

#date default timezone set
date_default_timezone_set('Asia/Kolkata');  

$timestamp = time(); 

$dateString = date('d-m-Y H:i:s', $timestamp);

echo "Current date and time: $dateString";        

echo "<br>";
echo "<br>";


#date create
$date=date_create_from_format("j-M-Y","15-Mar-2013");
echo date_format($date,"d/m/Y");

echo "<br>";
echo "<br>";

$date = date_create("2024-04-23");
echo date_format($date, "Y/m/d");

echo "<br>";
echo "<br>";

#date_diff() calculate the date between two dates


$date1 = date_create('2024-02-15');
$date2 = date_create('2024-10-06');
$diff = date_diff($date1, $date2);
echo $diff->format("%R%a days");
echo "<br>";
echo "<br>";
echo $diff->format("Months: %m, Days: %d.");
echo "<br>";
echo "<br>";

#date_modify()
$date=date_create("08-02-2024");
date_modify($date,"+15 days");
echo date_format($date,"d-m-Y");
echo "<br>";



?>