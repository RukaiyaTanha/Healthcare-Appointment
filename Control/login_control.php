<?php
session_start();
include "../Model/db.php";

if(isset($_REQUEST["submit"])) {
    $conn = createCon();

    $result = checkLogin($conn, $_REQUEST["fullName"], $_REQUEST["pass"]);
    if(mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $_REQUEST["fullName"];
        header("Location: ../View/profile.php");
    } 
}
    