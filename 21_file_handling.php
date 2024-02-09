<?php
$file = "output.txt";

echo readfile("output.txt");
//copy($file, "newfile.txt");  

//rename("newfile.txt", "oldfile.txt");
unlink("oldfile.txt");
?>