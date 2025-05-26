<?php
session_start();
include "../Model/db.php";

if (!isset($_SESSION['user'])) {
    echo "User not logged in.";
    exit();
}

$conobj = createCon();

$username = $_SESSION['user'];
$sql = "SELECT * FROM doctors WHERE fullName = '$username'";
$result = mysqli_query($conobj, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Username: " . $row["fullName"] . "<br>";
        echo "Password: " . $row["pass"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Phone: " . $row["phone"] . "<br>";
        echo "File: " . $row["files"] . "<br><br>";
        //echo "File: <img src='../Upload/" . $row["files"] . "'><br><br>";
    }
} 
?>
