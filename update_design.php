<?php include("connection.php"); 
error_reporting(0);


session_start();

$id= $_GET['id'];

$userprofile = $_SESSION['user_name'];

if($userprofile == true)
{
    
}

else
{
     header('location:login.php');
}

$query = "SELECT * FROM form WHERE id='$id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

$language   = $result['language'];
$language1  = explode(",", $language)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
     <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form_style.css">
</head>

<body>
    <div class="container">
        <div class="title">
            Update Details
        </div>
        <form action="#" method="post" enctype="multipart/form-data">
        <div class="form">

            <!-- <div class="input_field">
                <label>Upload Image</label>
                <input type="file" value="<?php echo $result['upload_img'];?>" name="uploadfile_img" style="width:100%;" required>
            </div> -->

            <div class="input_field">
                <label for="">First Name</label>
                <input type="text" value="<?php echo $result['fname'];?>" class="input" 
                name="fname" required>
            </div>

            <div class="input_field">
                <label for="">Last Name</label>
                <input type="text" value="<?php echo $result['lname'];?>" class="input" 
                name="lname" required>
            </div>

             <div class="input_field">
                <label for="">Password</label>
                <input type="password" value="<?php echo $result['password'];?>" class="input" 
                name="password" required>
            </div>

            <div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" value="<?php echo $result['cpassword'];?>" class="input" 
                name="cpassword" required>
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
                <input type="email" value="<?php echo $result['email'];?>" class="input" 
                name="email" required>
            </div>

            <div class="input_field">
                <label for="">Phone Number</label>
                <input type="text" value="<?php echo $result['phone'];?>" class="input" 
                name="phone" required>
            </div>

             <div class="input_field">
                <label style="margin-right: 100px">Caste</label>
                <input type="radio" class="input" name="caste" value="General" required 
                
                <?php 
                     if($result['caste'] == "General")
                     {
                        echo "checked";
                     }
                ?>
                   
                >
                <label style="margin-left: -20px">General</label>

                <input type="radio" class="input" name="caste" value="OBC" required
                
                <?php 
                    if($result['caste'] == "OBC")
                    {
                    echo "checked";
                    }
                ?>
                
                >
                <label style="margin-left: -20px">OBC</label>

                <input type="radio" class="input" name="caste" value="SC" required
                
                <?php 
                    if($result['caste'] == "SC")
                    {
                    echo "checked";
                    }
                ?>
                
                >
                <label style="margin-left: -20px">SC</label>

                <input type="radio" class="input" name="caste" value="ST" required
                
                <?php 
                    if($result['caste'] == "ST")
                    {
                    echo "checked";
                    }
                ?>
                
                ><label style="margin-left: -20px">ST</label>
            </div>

            <div class="input_field">
                <label style="margin-right: 100px">Languages</label>
                <input type="checkbox" class="input" name="language[]" value="Hindi"
                
                <?php
                    if(in_array('Hindi', $language1))
                    {
                        echo "checked";
                    }
                ?>
                
                ><label style="margin-left: 5px">Hindi</label>

                <input type="checkbox" class="input" name="language[]" value="Urdu"
                
                <?php
                    if(in_array('Urdu', $language1))
                    {
                        echo "checked";
                    }
                ?>
                
                ><label style="margin-left: 5px">Urdu</label>

                <input type="checkbox" class="input" name="language[]" value="English"
                
                <?php
                    if(in_array('English', $language1))
                    {
                        echo "checked";
                    }
                ?>
                
                ><label style="margin-left: 5px">English</label>
            </div>

            <div class="input_field">
                <label for="">Address</label>
                <textarea name="address" id="" required><?php echo $result['address'];?></textarea>
            </div>

            <!-- <div class="input_field">
                <label>Upload Document</label>
                <input type="file" value="<?php echo $result['upload_doc'] ?>" name="uploadfile_doc" style="width:100%;" required>
            </div> -->

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
        $upload_img      = $_POST['upload_img'];
        $fname           = $_POST['fname'];
        $lname           = $_POST['lname'];
        $pwd             = $_POST['password'];
        $cpwd            = $_POST['cpassword'];
        $gender          = $_POST['gender'];
        $email           = $_POST['email'];
        $phone           = $_POST['phone'];
        $caste           = $_POST['caste'];

        $lang            = $_POST['language'];
        $lang1           = implode(",", $lang);

        $address         = $_POST['address'];
        $upload_doc      = $_POST['upload_doc'];

    $query = "UPDATE form set upload_img='$upload_img',fname='$fname',lname='$lname',password='$pwd',cpassword='$cpwd',gender='$gender',
              email='$email',phone='$phone',caste='$caste',language='$lang1',address='$address',upload_doc='$upload_doc' WHERE id='$id'";

    $data = mysqli_query($conn, $query);

    if ($data) 
        {
        echo "<script >alert('Record Updated')</script>";
        ?>

            <meta http-equiv="refresh" content="0;url = http://localhost/web_development/display.php"/>

        <?php
        } 
    else 
    {
        echo "Failed to Update";
    }
}

?> 