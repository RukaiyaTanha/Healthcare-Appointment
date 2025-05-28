<?php
include "../Control/profile_control.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Profile</title>
    <link rel="stylesheet" href="../Style/profiles.css">
</head>
<body>
    <div class="profile-container">
        <h2>Doctor Profile</h2>
        
        <div class="welcome">
            Hello, <?php echo htmlspecialchars($_SESSION['user']); ?>
        </div>
        
        <div class="profile-info">
            <?php 
            if (isset($doctorData)) { 
                echo '
                <div class="info-item">
                    <span class="info-label">ID:</span>
                    <span class="info-value">'.htmlspecialchars($doctorData['id']).'</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Username:</span>
                    <span class="info-value">'.htmlspecialchars($doctorData['fullName']).'</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Password:</span>
                    <span class="info-value">'.htmlspecialchars($doctorData['pass']).'</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Email:</span>
                    <span class="info-value">'.htmlspecialchars($doctorData['email']).'</span>
                </div>
                
                <div class="info-item">
                    <span class="info-label">Phone:</span>
                    <span class="info-value">'.htmlspecialchars($doctorData['phone']).'</span>
                </div>';
                
                if (!empty($doctorData['files'])) {
                    echo '
                    <div class="info-item">
                        <span class="info-label">Uploaded File:</span>
                        <span class="info-value">'.htmlspecialchars($doctorData['files']).'</span>
                    </div>';
                }
                
                echo '
                <div class="profile-actions">
                    <a href="edit_profile.php?id='.$doctorData['id'].'" class="btn edit-btn">Edit Profile</a>
                    <form action="../Control/delete_profile.php" method="POST" onsubmit="return confirm(\'Are you sure you want to delete your profile?\');">
                        <input type="hidden" name="id" value="'.$doctorData['id'].'">
                        <button type="submit" class="btn delete-btn">Delete Profile</button>
                    </form>
                </div>';
            } else {
                echo '
                <p>No profile information found.</p>
                <a href="../View/doctor account.php" class="btn create-btn">Create Profile</a>';
            }
            ?>
        </div>
        
        <a href="../Control/logout.php" class="logout-link">Logout</a>
    </div>
</body>
</html>