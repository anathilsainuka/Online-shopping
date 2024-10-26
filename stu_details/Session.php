<?php


Session_start();

if(!isset( $_SESSION['userid']))
{
header('location: login.php');
exit();

}

?>