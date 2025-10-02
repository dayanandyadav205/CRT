<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>
    <form action="registration.php" method="post">
        <fieldset>
            <legend>Registration Form</legend>
            <table>
                <tr>
                    <td><input type="text" name="fname" pattern="[a-zA-Z]{3,30}" placeholder="First Name" required>
                    </td>
                </tr>

                <tr>
                    <td><input type="text" name="lname" pattern="[a-zA-Z]{3,30}" placeholder="Last Name" required>
                    </td>
                </tr>

                <tr>
                    <td><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            placeholder="Password" required></td>
                </tr>

                <tr>
                    <td><input type="password" name="conpassword" placeholder="Confirm Password" required></td>
                </tr>

                <tr>
                    <td><select name="gender" required>
                            <option value="Gender_Not_Selected">Select Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select></td>
                </tr>

                <tr>
                    <td> <input type="email" name="email" placeholder="Email" required></td>
                </tr>

                <tr>
                    <td><input type="number" name="phone" placeholder="Phone Number" required></td>
                </tr>

                <tr>
                    <td><textarea name="address" placeholder="Address" required></textarea></td>
                </tr>

                <tr>
                    <td><input type="file" name="uploadfile"></td>
                </tr>

                <tr>
                    <td style="color:white;"><input type="checkbox" required> Agree to terms and conditions </td>
                </tr>

                <tr>
                    <td> <input type="submit" name="register"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <br>
    <p>Already registered?</p><a href="login.php">Login Here</a>
</body>

</html>

<?php
if ($_POST['register']) {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "INSERT INTO registration_form values('$first_name', '$last_name', '$password', '$confirmpassword', 
                                                    '$gender', '$email', '$phone', '$address')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data Inserted into Database";
    } else {
        echo "failed";
    }
}
?>