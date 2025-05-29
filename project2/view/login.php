<?php 
include "../control/login_control.php";
?>
  



<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" type="text/css" href="../css/mycs1.css">
        
        
</head>
<body>
    
    <form  id="loginForm" action="" method="POST" enctype="multipart/form-data">
        <div class="exp1">Login form</div>
        <table>
            <tr>
                <td><label for="text" id="username" name="fullname" class="center">User Name</label></td>
                <td><input type="text" id="username" class="center" name="fullname" placeholder="Enter Your name" ></td>
             
            </tr>

             <tr>
                <td><label for="password" class="center" name="password">Password</label></td>
                <td><input type="password" class="center"  name="password"   placeholder="Enter Your Password" ></td>
                
            </tr>
</table>

</body>

             <input type="submit" name="login"  id="para1"  value="Login">
           <strong>If you don't have an account,<a href="../view/customer.php">Create an account</a></strong>
</form>
               </html> 