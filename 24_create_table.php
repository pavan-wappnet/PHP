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


// create a table in the db
$sql = "CREATE TABLE `mytrip` (`srno` INT(11) NOT NULL , `name` VARCHAR(11) NOT NULL , `dest` VARCHAR(11) NOT NULL, PRIMARY KEY (`srno`))";
$result = mysqli_query($conn, $sql);

// checking table creation
if($result){
    echo "table was created succesfully!";
}
else{
    echo "The table was not succesfully created becasue off this error: " . mysqli_error($conn);
}

?>