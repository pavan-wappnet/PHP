<?php
$servername =  "localhost";
$username = "root";
$password = "";
$database = "dbPhp";


#create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

#check for conncection
if(!$conn){
    die ("sorry we failed to connect:  ". mysqli_connect_error());
}else{
    echo "Connection was successfull  <br><br>";
}


$sql = "INSERT INTO `mytrip` (`srno` ,`name`, `dest`) VALUES (2, 'Dhruv', 'Goa')";
$result = mysqli_query($conn, $sql);

// checking table creation
if($result){
    echo "data has been inserted successfully";
}
else{
    echo "data has not been inserted successfully becasue of this error: " . mysqli_error($conn);
}
?>