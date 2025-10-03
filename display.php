<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
     <style>
        body{
            background: #D071f9;
        }
        table{
            background: white;
        }
     </style>
</head>

<body>

<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM registration_form";

$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);


// echo $total;

if ($total != 0) {
    ?>
    <h2 style="text-align: center;"><mark>Display All Records</mark></h2>
    <table border="1" cellspacing="7" width="100%">
        <tr>
            <th width="5%">Id</th>
            <th width="8%">First Name</th>
            <th width="8%">Last Name</th>
            <th width="5%">Gender</th>
            <th width="10%">DOB</th>
            <th width="20%">Email</th>
            <th width="10%">Phone</th>
            <th width="18%">Address</th>
            <th width="16%">Edit Options</th>
        </tr>

        <?php
        while ($result = mysqli_fetch_assoc($data)) 
            {
          echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['fname']."</td>
                <td>".$result['lname']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['dob']."</td>
                <td>".$result['email']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['address']."</td>
                <td><a href='update_design.php?id=$result[id]'>Update</a></td>
          </tr>";
        }
    // echo "Table has records";
} else {
    echo "No record found";
}
?>
</table>


</body>
</html>