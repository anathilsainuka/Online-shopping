<?php
$localhost = "127.0.0.1";
$uname = "root";
$pword = "";
$db_name = "20astudents"; 
//db_connection
$conn = new mysqli($localhost, $uname, $pword, $db_name);
if($conn -> connect_error)
 die("Error connecting:" . $conn->connect_error);
else
//echo "db connection ok";
?>
