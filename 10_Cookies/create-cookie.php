<?php
$cookie_name = "user";
$cookie_value = "This is a cookie";

setcookie($cookie_name, $cookie_value, time() + (300), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie is not set"; 
       }
       else{
        echo $_COOKIE[$cookie_name];
       }
    ?>
</body>
</html>