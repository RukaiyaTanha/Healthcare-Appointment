<?php
session_start();
include "../Model/db.php";

if (!isset($_SESSION['user'])) {
    header("Location: ../View/login.php");
    exit();
}

$conobj = createCon();
$username = $_SESSION['user'];

$sql = "SELECT * FROM doctors WHERE fullName = '$username'";
$result = mysqli_query($conobj, $sql);

if (mysqli_num_rows($result) > 0) {
    $doctorData = mysqli_fetch_assoc($result);
}
closeCon($conobj);
?>