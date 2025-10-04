<?php include("connection.php"); 

$id= $_GET['id'];

$query = "SELECT * FROM form WHERE id='$id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <div class="container">
        <div class="title">
            Registration Form
        </div>
        <form action=" " method="post">
        <div class="form">
            <div class="input_field">
                <label for="">First Name</label>
                <input type="text" value="<?php echo $result['fname'];?>" class="input" name="fname" required>
            </div>

            <div class="input_field">
                <label for="">Last Name</label>
                <input type="text" value="<?php echo $result['lname'];?>" class="input" name="lname" required>
            </div>

             <div class="input_field">
                <label for="">Password</label>
                <input type="password" value="<?php echo $result['password'];?>" class="input" name="password" required>
            </div>

            <div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" value="<?php echo $result['cpassword'];?>" class="input" name="cpassword" required>
            </div>

            <div class="input_field">
                <label for="">Gender</label>
                <div class="custom_select">
                    <select name="gender" id="" required>
                        <option value="Not Selected">Select</option>

                        <option value="Male" 
                            <?php
                                if($result['gender'] == 'Male')
                                {
                                    echo "selected";
                                }
                            ?>
                        >
                        
                        Male</option>
                        <option value="Female"
                            <?php
                                if($result['gender'] == 'Female')
                                {
                                    echo "selected";
                                }
                            ?>
                        >
                        Female</option>
                    </select>
                </div>
            </div>

            <div class="input_field">
                <label for="">Email Address</label>
                <input type="email" value="<?php echo $result['email'];?>" class="input" name="email" required>
            </div>

            <div class="input_field">
                <label for="">Phone Number</label>
                <input type="text" value="<?php echo $result['phone'];?>" class="input" name="phone" required>
            </div>

            <div class="input_field">
                <label for="">Address</label>
                <textarea name="address" id=""><?php echo $result['address'];?></textarea>
            </div>

            <div class="input_field terms">
                <label for="" class="check">
                    <input type="checkbox" name="check" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree terms and conditions</p>
            </div>
            <div class="input_field">
                <input type="submit" value="Update Details" class="btn" name="update">
            </div>
        </div>
        </form>
    </div>
</body>

</html>

<?php
if ($_POST['update']) 
    {
        $fname      = $_POST['fname'];
        $lname      = $_POST['lname'];
        $pwd        = $_POST['password'];
        $cpwd       = $_POST['cpassword'];
        $gender     = $_POST['gender'];
        $email      = $_POST['email'];
        $phone      = $_POST['phone'];
        $address    = $_POST['address'];

    $query = "UPDATE form set fname='$fname', lname='$lname', password='$pwd', cpassword='$$cpwd',
             gender='$gender', email='$email', phone='$phone', address='$address' WHERE id='$id'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Record Updated";
    } else {
        echo "Failed to Update";
    }
}

?> 