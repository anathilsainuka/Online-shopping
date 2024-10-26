<?php
Session_start();


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HTML5 Login Form with validation Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="Style1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Login</h2>
  <form method="POST" id="login-form" >
    
  <p>
  <input type="text" id="email" name="uname" placeholder="User Name" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text" id="username" name="pword" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
   
    <p>
    <input type="submit" id="login"  name ="login" value="Login">
    </p>

    
  </form>
  <div id="create-account-wrap">
    
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->
  


<?php

require_once "admin/db_connect.php";


if(isset($_POST['login'])) {
    $username=$_POST['uname'];
    $password=$_POST['pword'];

    $sql = "select * from login where username='$username' AND password='$password'";
    $result=$conn->query($sql);
    $row=$result->num_rows;

    //echo $row;

    if ($row==1)
    {
      $data = $result->fetch_assoc();
      //echo $data['username']."<br>".$data['password'];
      if($data['password']== $password)
      {
        $_SESSION['userid']=$_POST['uname'];
      
        header('location:view.php');

      } else
      {
        echo "Login Failed";
      }

    }
    else{
       echo "Login Failed";
    }

}
?>

</body>
</html>