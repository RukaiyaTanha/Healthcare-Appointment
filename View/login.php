<?php
include "../Control/login_control.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Form</title>
    <link rel="stylesheet" href="../Style/doctor.css">
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="../images/doc.png" class="form-image">
            <div class="image-text">Online Healthcare Appointment</div>
        </div>
            <!-- Form with Background Image -->
            <form id="doctorForm" action="" method="POST" enctype="multipart/form-data">
            <div class="form-title">LOGIN</div>
            <div class="form-columns">
                    <table>
                        <tr>
                            <td><label for="fullName">Full Name:</label></td>
                            <td><input type="text" id="fullName" name="fullName" placeholder="Enter your full name" >
                        </td>
                        </tr>
                        <tr>
                            <td><label for="pass">Password:</label></td>
                            <td><input type="password" id="pass" name="pass" placeholder="Enter your password" >                        
                        </tr>
                    </table>
                </div>
                <div class="button-container">
                <input type="submit" id="submit" name= "submit" class="submit" value="Submit">
                <input type="reset" id="reset" name= "reset" class="reset new" value="Clear"><br><br>
                <center>Don't have an account?    <a href="../View/doctor account.php">Create an account</a></center>
            </div>
            </div>
             
            </form> 
        </div>
</body>
</html>


