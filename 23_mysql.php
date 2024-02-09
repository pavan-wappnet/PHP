<?php
$servername =  "localhost";
$username = "root";
$password = "";



#create a connection
$conn = mysqli_connect($servername, $username, $password);

#check for conncection
if(!$conn){
    die ("sorry we failed to connect:  ". mysqli_connect_error());
}else{
    echo "Connection was successfull  <br><br>";
}

#creating a database

$sql = "CREATE DATABASE dbPhp";
$result = mysqli_query($conn, $sql);

// checking database creation
if($result){
    echo "Database was created succesfully!";
}
else{
    echo "The db was not succesfully created becasue off this error: " . mysqli_error($conn);
}

?>