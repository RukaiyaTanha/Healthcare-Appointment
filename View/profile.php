<?php
include "../Control/profile_control.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../Style/profile.css">
</head>
<body>
    <div class="profile-container">
        <h2>Profile Page</h2>
        
        <div class="welcome">
            Hello, <?php echo $_SESSION['user']; ?>!
        </div>
        
        <div class="basic-info">
            <p><strong>Username:</strong> <?php echo $_SESSION['user']; ?></p>
        </div>
        
        <a href="../Control/logout.php" class="logout-link">Logout</a>
    </div>
</body>
</html>
