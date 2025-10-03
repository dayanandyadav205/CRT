<?php include("connection.php");
// error_reporting(0);

$Id = $_GET['id'];

$query = "SELECT * FROM registration_form where id= '$Id'";

$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>
    <form action="registration.php" method="POST">
        <fieldset>
            <legend>Update Details</legend>
            <table>
                <tr>
                    <td><input type="text" name="fname" value="<?php echo $result['fname']; ?>" pattern="[a-zA-Z]{3,30}"
                            placeholder="First Name" required>
                    </td>
                </tr>

                <tr>
                    <td><input type="text" name="lname" value="<?php echo $result['lname']; ?>" pattern="[a-zA-Z]{3,30}"
                            placeholder="Last Name" required>
                    </td>
                </tr>
                <tr>
                    <td><input type="password" name="password" value="<?php echo $result['password']; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            placeholder="Password" required></td>
                </tr>

                <tr>
                    <td><input type="password" name="conpassword" value="<?php echo $result['conpassword']; ?>" placeholder="Confirm Password" required></td>
                </tr>
                <tr>
                    <td style="color:white;">Gender<select name="gender" required>
                            <option value="Gender_Not_Selected">Select Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select></td>
                </tr>

                <tr>
                    <td style="color:white;">DOB<input type="date" name="dob" value="<?php echo $result['dob']; ?>"
                            required></td>
                </tr>

                <tr>
                    <td> <input type="email" name="email" placeholder="Email" value="<?php echo $result['email']; ?>"
                            required></td>
                </tr>

                <tr>
                    <td><input type="number" name="phone" placeholder="Phone Number"
                            value="<?php echo $result['phone']; ?>" required></td>
                </tr>

                <tr>
                    <td><textarea name="address" placeholder="Address" required>
                        <?php echo $result['address']; ?>
                    </textarea></td>
                </tr>

                <tr>
                    <td><input type="file" name="uploadfile"></td>
                </tr>

                <tr>
                    <td style="color:white;"><input type="checkbox" required> Agree to terms and conditions </td>
                </tr>

                <tr>
                    <td> <input type="submit" value="Update Details" name="register"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <br>
</body>

</html>

<?php
if ($_POST['register']) {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $birtdate = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "INSERT INTO registration_form (fname, lname, password, conpassword, gender, dob, email, 
    phone, address) VALUES ('$first_name', '$last_name', '$password', '$confirmpassword', '$gender',
                            '$birtdate', '$email', '$phone', '$address')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Details Updated Database";
    } else {
        echo "failed";
    }
}
?>