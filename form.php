<?php include("connection.php"); ?>

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
        <form action="form.php" method="post">
        <div class="form">
            <div class="input_field">
                <label for="">First Name</label>
                <input type="text" class="input" name="fname">
            </div>

            <div class="input_field">
                <label for="">Last Name</label>
                <input type="text" class="input" name="lname">
            </div>

            <div class="input_field">
                <label for="">Password</label>
                <input type="password" class="input" name="password">
            </div>

            <div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" class="input" name="cpassword">
            </div>

            <div class="input_field">
                <label for="">Gender</label>
                <div class="custom_select">
                    <select name="gender" id="">
                        <option value="Not Selected">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="input_field">
                <label for="">Email Address</label>
                <input type="email" class="input" name="email">
            </div>

            <div class="input_field">
                <label for="">Phone Number</label>
                <input type="text" class="input" name="phone">
            </div>

            <div class="input_field">
                <label for="">Address</label>
                <textarea name="address" id=""></textarea>
            </div>

            <div class="input_field terms">
                <label for="" class="check">
                    <input type="checkbox" name="check">
                    <span class="checkmark"></span>
                </label>
                <p>Agree terms and conditions</p>
            </div>
            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>
        </div>
        </form>
    </div>
</body>

</html>

<?php
if ($_POST['register']) 
    {
        $fname      = $_POST['fname'];
        $lname      = $_POST['lname'];
        $pwd        = $_POST['password'];
        $cpwd       = $_POST['cpassword'];
        $gender     = $_POST['gender'];
        $email      = $_POST['email'];
        $phone      = $_POST['phone'];
        $address    = $_POST['address'];

    $query = "INSERT INTO form (fname, lname, password, cpassword, gender, email, phone, address) 
              VALUES ('$fname', '$lname', '$pwd', '$cpwd', '$gender','$email', '$phone', '$address')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data Inserted into Database";
    } else {
        echo "failed";
    }
}

?> 