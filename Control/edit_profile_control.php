<?php
session_start();
include "../Model/db.php";

if (!isset($_SESSION['user'])) {
    header("Location: ../View/login.php");
    exit();
}

if (isset($_GET['id'])) {
    $conobj = createCon();
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM doctors WHERE id = $id AND fullName = '".$_SESSION['user']."'";
    $result = mysqli_query($conobj, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $doctor = mysqli_fetch_assoc($result);
    } else {
        header("Location: profile.php");
        exit();
    }
    closeCon($conobj);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $conobj = createCon();
    $id = $_POST['id'];
    $fullName = $_POST['fullName'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $file = $doctor['files']; 
    
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Upload/".$_FILES["myfile"]["name"])){
                echo "File uploaded successfully.";
            }
    $sql = "UPDATE doctors SET 
            fullName='$fullName', 
            pass='$pass',
            email='$email', 
            phone='$phone', 
            files='$file' 
            WHERE id=$id AND fullName='".$_SESSION['user']."'";
    
    if (mysqli_query($conobj, $sql)) {
        $_SESSION['user'] = $fullName;
        header("Location: profile.php?updated=1");
        exit();
    } else {
        $error = "Error updating profile: " . mysqli_error($conobj);
    }
    
    closeCon($conobj);
}
?>