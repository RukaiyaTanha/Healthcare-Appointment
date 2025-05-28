<?php
function createCon(){
    return mysqli_connect("localhost", "root", "", "doctor");
}
function insertData($conn, $fullName, $pass, $email, $phone, $file) {
    $sql = "INSERT INTO doctors (fullName,pass,email, phone, files)
    VALUES ('$fullName', '$pass', '$email', '$phone',' $file')";
    return mysqli_query($conn, $sql);
}
function closeCon($conn){
   return mysqli_close($conn);
}

function checkLogin($conn, $fullName, $pass) {
    $sql = "SELECT * FROM doctors WHERE fullName='$fullName' AND pass ='$pass'";
    return mysqli_query($conn, $sql);
}

/*function fetchUser($conn, $fullName) {
    $sql = "SELECT * FROM doctors WHERE fullName='$fullName'";
    return mysqli_query($conn, $sql);
}*/

function deleteDoctor($conn, $id) {
    $sql = "DELETE FROM doctors WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function updateDoctor($conn, $id, $fullName, $pass, $email, $phone, $file) {
    $sql = "UPDATE doctors SET 
            fullName='$fullName', 
            pass='$pass',
            email='$email', 
            phone='$phone', 
            files='$file' 
            WHERE id=$id";
    return mysqli_query($conn, $sql);
}