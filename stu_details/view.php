<?php
include('Session.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="Style1.css">
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }
    </style>
</head>
<?php
require_once 'admin/db_connect.php';
?>

<body>
    <div class="container">

    <button type="button">Logout</button>
        <table class="table">

            <tr>
                <th>
                    First Name
                </th>
                <th>
                    Last Name
                </th>
                <th>
                    Age
                </th>
                <th>
                    TP
                </th>
                <th>
                    Address
                </th>
            </tr>
            <?php
            $sql = "SELECT * FROM Stu_details";
            $result = $conn->Query($sql);
            if ($result->num_rows > 0) {


                while ($row = $result->fetch_assoc()) {



                    echo " <tr>
             <td>" . $row['fname'] . "</td>
             <td>" . $row['lname'] . "</td>
             <td>" . $row['age'] . "</td>
             <td>" . $row['tp'] . "</td>
             <td>" . $row['address'] . "</td>

             <td><button>Delete</button>  <a href='edit.php?id=".$row['ID']."'><button>Edit</button> </a>  </td>
         </tr>";
                }
            } 
            else 
            {
                echo "
                        <tr>
            <td colspan='5'><center>NO DATA FOUND<center></td>
            <tr>";
            }
            ?>
        </table>
        <a href="create.php" ><button type="button">ADD</button></a>

      
    </div>
</body>

</html>