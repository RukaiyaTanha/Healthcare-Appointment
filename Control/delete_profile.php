<?php
session_start();
include "../Model/db.php";

if (!isset($_SESSION['user'])) {
    header("Location: ../View/login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $conobj = createCon();
    $id = $_POST['id'];

    $checkSql = "SELECT * FROM doctors WHERE id = $id AND fullName = '".$_SESSION['user']."'";
    $checkResult = mysqli_query($conobj, $checkSql);
    
    if (mysqli_num_rows($checkResult) > 0) {
        if (deleteDoctor($conobj, $id)) {
            session_destroy();
            header("Location: ../View/login.php?deleted=1");
            exit();
        }
    }
    closeCon($conobj);
}
/*header("Location: ../View/profile.php");
exit();*/
?>