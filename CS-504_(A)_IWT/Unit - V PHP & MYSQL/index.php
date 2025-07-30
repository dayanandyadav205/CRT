<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Store Data</title>
   </head>
   <body>
    <center>
         <h1>Storing Form data in Database</h1>
         <table>
         <form action="insert.php" method="post">
            
             <tr>
               <td><label for="rollno">Roll No:</label></td>
               <td><input type="text" name="roll_no" id="rollno" required></td>
            </tr>

            <tr>
               <td><label for="firstName">First Name:</label></td>
               <td><input type="text" name="first_name" id="firstName" required></td>
            </tr>

            <tr>
               <td><label for="lastName">Last Name:</label></td>
               <td><input type="text" name="last_name" id="lastName" required></td>
            </tr>

            <tr>
               <td> <label for="Branch">Branch:</label></label></td>
               <td><input type="text" name="branch" id="branch" required></td>
            </tr>

            <tr>
                <td><label for="emailAddress">Email Address:</label></td>
                <td><input type="text" name="email" id="emailAddress" required></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
         </form>
         </table>
         </center>
   </body>
</html>