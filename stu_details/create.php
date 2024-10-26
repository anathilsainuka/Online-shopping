<!DOCTYPE html>
<html>
<head>
  <title>Application Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Application Form</h2>
    <form action="admin/create.php" method="GET">
      <div class="form-group">
        <label for="first-name">First Name:</label>
        <input type="text" class="form-control" id="first-name" placeholder="Enter your first name" name="fname" required>
      </div>
      <div class="form-group">
        <label for="last-name">Last Name:</label>
        <input type="text" class="form-control" id="last-name" placeholder="Enter your last name" name="lname" required>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" id="age" placeholder="Enter your age" name="age" required>
      </div>
      <div class="form-group">
        <label for="telephone">Telephone:</label>
        <input type="tel" class="form-control" id="telephone" placeholder="Enter your telephone number" name="tp" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" placeholder="Enter your address" name="address" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
