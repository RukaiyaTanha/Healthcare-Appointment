<?php
include "../Control/edit_profile_control.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../Style/doctor.css">
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="../images/doc.png" class="form-image">
            <div class="image-text">Edit Doctor Profile</div>
        </div>
        
        <form id="doctorForm" action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $doctor['id']; ?>">
            
            <div class="form-title">Edit Profile</div>
            
            <div class="form-columns">
                <!-- Left Column -->
                <div class="column left-column">
                    <table>
                        <tr>
                            <td><label for="fullName">Full Name:</label></td>
                            <td>
                                <input type="text" id="fullName" name="fullName" 
                                       value="<?php echo $doctor['fullName']; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="pass">Password:</label></td>
                            <td>
                                <input type="password" id="pass" name="pass" 
                                       value="<?php echo $doctor['pass']; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td>
                                <input type="email" id="email" name="email" 
                                       value="<?php echo $doctor['email']; ?>" required>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <!-- Right Column -->
                <div class="column right-column">
                    <table>
                        <tr>
                            <td><label for="phone">Phone:</label></td>
                            <td>
                                <input type="tel" id="phone" name="phone" 
                                       value="<?php echo $doctor['phone']; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Current File:</label></td>
                            <td><?php echo $doctor['files']; ?></td>
                        </tr>
                        <tr>
                            <td><label for="upload">Update file:</label></td>
                            <td><input type="file" name="myfile" class="file-upload"></td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="button-container">
                <input type="submit" name="update" class="submit" value="Save Changes">
                <a href="profile.php" class="reset new button-link">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>