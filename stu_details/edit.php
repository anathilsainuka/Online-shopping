<!DOCTYPE html>
<html>
<head>
  <title>Edit</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<?php

require_once 'admin/db_connect.php';
$id=$_GET['id'];
$sql ="SELECT * FROM Stu_details where ID = $id";
$result = $conn->Query($sql);
$row = $result->fetch_assoc();

$conn->Close();
?>


<body>
  <div class="container">
    <h2>Edit Page</h2>
    <form action="admin/update.php" method="GET">
      <div class="form-group">
        <label for="first-name">First Name:</label>
        <input type="text" class="form-control" id="first-name" placeholder="Enter your first name" name="fname"  value=" <?=$row['fname'] ?>"required>
      </div>
      <div class="form-group">
        <label for="last-name">Last Name:</label>
        <input type="text" class="form-control" id="last-name" placeholder="Enter your last name" name="lname" value=" <?=$row['lname'] ?>"required>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="text" class="form-control" id="age" placeholder="Enter your age" name="age" value=" <?=$row['age'] ?>"required>
      </div>
      <div class="form-group">
        <label for="telephone">Telephone:</label>
        <input type="tel" class="form-control" id="telephone" placeholder="Enter your telephone number" name="tp" value=" <?=$row['tp'] ?>"required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input class="form-control" id="address" placeholder="Enter your address" name="address" value=" <?=$row['address'] ?>"required></input>
        <input type= hidden class="form-control" id="address" placeholder="Enter your address" name="id" value=" <?=$id ?>"required></input>
      </div>
      <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
  </div>
</body>
</html>
