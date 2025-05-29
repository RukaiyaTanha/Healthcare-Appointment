<?php
include"../control/profile_control.php";
?>

<html>
<head>
    <title>Patient Form</title>
   <link rel="stylesheet" type="text/css" href="../css/mycs.css">
</head>
<body>
    <h1>Online Healthcare System - Profile page</h1>
    <div class="welcome">
        hello ,<?php echo $_SESSION['user'];?>
</div>

<br>
<a href="../Control/logout.php" class="logout">Logout</a>
</body>
</html>