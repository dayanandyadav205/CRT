<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "student_info");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. ".mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $roll =  $_REQUEST['roll_no'];
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $branch =  $_REQUEST['branch'];
        $email = $_REQUEST['email'];
        
        // Performing insert query execution
        // here our table name is emp
        $sql = "INSERT INTO student  VALUES (' $roll','$first_name','$last_name','$branch','$email')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>