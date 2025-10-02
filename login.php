
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body>

 <!-- Main Section -->
  <!-- <main>
    <div class="container">
        <?php
        if(isset($_POST["sign_in"]))
        {
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT email, password FROM users WHERE email = '$email'";
            // $sql ="SELECT email,password FROM users WHERE email=:email and password=:password";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($user)
            {
                if(password_verify($password, $email["password"]))
                {
                session_start();
                $_SESSION["users"] = "yes";
                header("Location: dashboard.php");
                die();
                }
                else{
                    echo "<div class='alert alert-success'>Password does not match.</div>";
                }
            }
            else{
                    echo "<div class='alert alert-success'>Email does not match.</div>";
                }
        }
        ?>

    <form action="sign_in.php" method="post">
        <fieldset>
                <legend>Sign In</legend>
            <table>
                <tr>
                    <td><input type="email" name="email" placeholder="Enter Email"></td>
                </tr>

                <tr>
                    <td> <input type="password" name="password" placeholder="Enter Password"></td>
                </tr>

                <tr>
                    <td> <input type="submit" name="sign_in" value="sign_in"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <br>
    <p>Not registered yet?</p><a href="sign_up.php">Sign Up Here</a> 
</main> -->


<?php
include("database.php");
?>

</body>
</html>