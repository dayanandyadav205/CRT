<?php include("connection.php"); 
error_reporting(0);

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
        <form action="#" method="post" enctype="multipart/form-data">
        <div class="form">

            <div class="input_field">
                <label>Upload Image</label>
                <input type="file" name="uploadfile" style="width:100%;" required>
            </div>

            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="fname" required>
            </div>

            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname" required>
            </div>

            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password" required>
            </div>

            <div class="input_field">
                <label>Confirm Password</label>
                <input type="password" class="input" name="cpassword" required>
            </div>

            <div class="input_field">
                <label>Gender</label>
                <div class="custom_select">
                    <select name="gender" id="" required>
                        <option value="Not Selected">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="input_field">
                <label>Email Address</label>
                <input type="email" class="input" name="email" required>
            </div>

            <div class="input_field">
                <label>Phone Number</label>
                <input type="text" class="input" name="phone" required>
            </div>

              <div class="input_field">
                <label style="margin-right: 100px">Caste</label>
                <input type="radio" class="input" name="caste" value="General" required><label style="margin-left: -20px">General</label>
                <input type="radio" class="input" name="caste" value="OBC" required><label style="margin-left: -20px">OBC</label>
                <input type="radio" class="input" name="caste" value="SC" required><label style="margin-left: -20px">SC</label>
                <input type="radio" class="input" name="caste" value="ST" required><label style="margin-left: -20px">ST</label>
            </div>

            <div class="input_field">
                <label style="margin-right: 100px">Languages</label>
                <input type="checkbox" class="input" name="language[]" value="Hindi"><label style="margin-left: 5px">Hindi</label>
                <input type="checkbox" class="input" name="language[]" value="Urdu"><label style="margin-left: 5px">Urdu</label>
                <input type="checkbox" class="input" name="language[]" value="English"><label style="margin-left: 5px">English</label>
            </div>

            <div class="input_field">
                <label>Address</label>
                <textarea name="address" id="" required></textarea>
            </div>

            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" name="check" required>
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
        $filename   = $_FILES["uploadfile"]["name"];
        $tempname  = $_FILES["uploadfile"]["tmp_name"];
        $folder = "images/".$filename;
        move_uploaded_file($tempname, $folder );

        $fname    = $_POST['fname'];
        $lname    = $_POST['lname'];
        $pwd      = $_POST['password'];
        $cpwd     = $_POST['cpassword'];
        $gender   = $_POST['gender'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];
        $caste    = $_POST['caste'];

        $lang     = $_POST['language'];
        $lang1    = implode(",", $lang);

        $address  = $_POST['address'];

    $query = "INSERT INTO form (std_image,fname,lname,password,cpassword,gender,email,phone,caste,language,address) 
              VALUES ('$folder','$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$caste','$lang1','$address')";

    $data = mysqli_query($conn, $query);

    if ($data) 
        {
        echo "<script> alert ('Data Inserted into Database') </script>";
    } 
    else 
        {
        echo "<script> alert ('Failed to Insert') </script>";
    }
}

?> 