<?php
require_once 'db_connect.php';
if ($_GET) {
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$age = $_GET['age'];
$tp = $_GET['tp'];
$address = $_GET['address'];

$sql = "insert into stu_details (fname,lname,age,tp,address) values ('$fname','$lname','$age','$tp','$address')";

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
