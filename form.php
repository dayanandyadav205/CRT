<?php include("connection.php");
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/index_style.css">
    <link rel="stylesheet" href="css/form_style.css">
<script>
    function checkpwd()
    {
        var p1 = document.f1.password.value;
        var p2 = document.f1.cpassword.value;

        if(p1 == p2)
        {
            return true;
        }
        else
        {
            alert("Password mismatch");
            return false;
        }
    }
</script>
</head>

<body>
    <!-- Header Section -->
    <header>
        <a href="https://www.cdgi.edu.in" target="_blank"><img src="images/cdgi.jpg" alt="CDGI Logo" width="100"
                height="100" id="logo1" /></a>

        <h1>Chameli Devi Group of Institutions, Indore</h1>
        <h2>Web Development</h2>

        <a href="https://github.com/dayanandyadav205" target="_blank"><img src="images/Dayanand.jpg" alt="GitHub"
                style="float: right;" width="100" height="100" id="logo2" /></a>
    </header>

    <!-- Navigation Section -->
    <nav>
        <a href="index.html">Home</a>
        <a href="contact.html">Contact</a>
        <a href="login_admin.php" style="float: right;">Admin Login</a>
        <a href="login_user.php" style="float: right;">User Login</a>
        </div>
    </nav>

    <!-- Aside Section -->
    <div class="aside">
        <aside>
            <h3>References</h3>
            <ul>
                <li><a href="https://github.com/">GitHub</a></li>
                <li><a href="https://www.google.com">Google</a></li>
                <li><a href="https://www.w3schools.com/">W3C</a></li>
                <li><a href="https://whatwg.org/">WHATWG</a></li>
            </ul>
        </aside>
    </div>

    <!-- Form -->
        <div class="container">
            <div class="title">
                Sign Up
            </div>
            <form name="f1" action="#" method="POST" enctype="multipart/form-data" onsubmit="return checkpwd()" autocomplete="on">
                <div class="form">
                    <div class="input_field">
                        <label>Upload Image</label>
                        <input type="file" name="uploadfile_img" style="width:100%;" required>
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
                        <input type="password" class="input" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
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
                        <input type="radio" class="input" name="caste" value="General"><label
                            style="margin-left: -20px">General</label>
                        <input type="radio" class="input" name="caste" value="OBC"><label
                            style="margin-left: -20px">OBC</label>
                        <input type="radio" class="input" name="caste" value="SC"><label
                            style="margin-left: -20px">SC</label>
                        <input type="radio" class="input" name="caste" value="ST"><label
                            style="margin-left: -20px">ST</label>
                    </div>

                    <div class="input_field">
                        <label style="margin-right: 100px">Languages</label>
                        <input type="checkbox" class="input" name="language[]" value="Hindi"><label
                            style="margin-left: 5px">Hindi</label>
                        <input type="checkbox" class="input" name="language[]" value="Urdu"><label
                            style="margin-left: 5px">Urdu</label>
                        <input type="checkbox" class="input" name="language[]" value="English"><label
                            style="margin-left: 5px">English</label>
                    </div>

                    <div class="input_field">
                        <label>Address</label>
                        <textarea name="address" id="" required></textarea>
                    </div>

                    <div class="input_field">
                        <label>Upload Document</label>
                        <input type="file" name="uploadfile_doc" style="width:100%;" required>
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

        <!-- Footer Section -->
        <footer>
            <a href="https://in.linkedin.com/company/chameli-devi-group-of-institutions">
                <img src="images/linkedin.jpg" width="3%"></a>

            <a href="https://mail.google.com/a/cdgi.edu.in">
                <img src="images/gmail.jpg" width="5%"></a>

            <a href="https://www.youtube.com/@socialcdgi">
                <img src="images/youtube.jpg" width="3%"></a>

            <p>&copy; Designed & Developed by Dayanand Yadav, Assistant Professor, CSE Department, CDGI, Indore</p>
        </footer>
    </body>
</html>

<?php
if ($_POST['register']) {
    $filename = $_FILES["uploadfile_img"]["name"];
    $tempname = $_FILES["uploadfile_img"]["tmp_name"];
    $folder = "images/" . $filename;
    move_uploaded_file($tempname, $folder);

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $caste = $_POST['caste'];

    $lang = $_POST['language'];
    $lang1 = implode(",", $lang);

    $address = $_POST['address'];

    $filename = $_FILES["uploadfile_doc"]["name"];
    $tempname = $_FILES["uploadfile_doc"]["tmp_name"];
    $folder_doc = "documents/" . $filename;
    move_uploaded_file($tempname, $folder_doc);

    $query = "INSERT INTO form (upload_img,fname,lname,password,cpassword,gender,email,phone,caste,language,address,upload_doc) 
              VALUES ('$folder','$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$caste','$lang1','$address','$folder_doc')";
    
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script> alert ('Data Inserted into Database') </script>";
    } else {
        echo "<script> alert ('Failed to Insert') </script>";
    }
}

?>