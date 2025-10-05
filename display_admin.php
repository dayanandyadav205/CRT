<?php

session_start();
echo "Welcome ".$_SESSION['user_name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
include("connection.php");
error_reporting(0);

$userprofile = $_SESSION['user_name'];

if($userprofile == true)
{
    
}

else
{
     header('location:login_admin.php');
}

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
// $result = mysqli_fetch_assoc($data);

// echo $result;
// echo $total;

if($total != 0) 
    {
    ?>

    <h2 style="text-align: center;"><mark>Records To Display & Edit (Admin)</mark></h2>
    <table border="3" cellspacing="5" width="95%">
        <tr>
            <th width="5%">id</th>
            <th width="5%">Image Uploaded</th>
            <th width="8%">First Name</th>
            <th width="8%">Last Name</th>
            <th width="3%">Gender</th>
            <th width="10%">Email</th>
            <th width="10%">Phone</th>
            <th width="5%">Caste</th>
            <th width="10%">Language</th>
            <th width="15%">Address</th>
             <th width="5%">Document Uploaded</th>
            <th width="20%">Edit Options</th>
        </tr>

        <?php
        while ($result = mysqli_fetch_assoc($data)) 
            {
          echo "<tr>
                <td>".$result['id']."</td>
                <td><img src= ' ".$result['upload_img']."' height='100px' width='100px'></td>
                <td>".$result['fname']."</td>
                <td>".$result['lname']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['email']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['caste']."</td>
                <td>".$result['language']."</td>
                <td>".$result['address']."</td>
                <td><img src= ' ".$result['upload_doc']."' height='100px' width='100px'></td>
                <td>
                <a href='update_design.php?id=$result[id]'><input type='submit' 
                value='Update' class='update'></a>

                <a href='delete.php?id=$result[id]'><input type='submit' 
                value='Delete' class='delete' onclick= 'return checkdelete()'></a>
                </td> 
          </tr>
          ";
        }
    // echo "Table has records";
} 
else 
    {
        echo "No record found";
    }
?>

</table>


</body>

<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to delete this record?');
    }
</script>

 <a href="logout.php"><input type="submit" name="" value="Logout" class="btn_logout"></a>

</html>



