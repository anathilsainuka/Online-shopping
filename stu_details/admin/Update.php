<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

require_once 'db_connect.php';
if ($_GET) {
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$age = $_GET['age'];
$tp = $_GET['tp'];
$address = $_GET['address'];
$id=$_GET['id'];

$sql = "update stu_details set fname='$fname' , lname='$lname' , age='$age',tp='$tp' , address='$address' where id=$id";

if ($conn -> query($sql)===true) {
    echo "Success";
}
else
{
   echo "failed";
}
echo "<h1> data sccessfull </h1>";
}
echo " <a href='../create.php'><button>HOME</button></a>";
echo "<a href='../view.php'><button>VIEW</button></a>";
?>


<body>
    
</body>
</html>