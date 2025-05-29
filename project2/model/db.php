<?php 

function createcon(){
    return mysqli_connect("localhost","root","","web");
}
function insertData($conn,$fullName,$email,$password,$file, $address ,$gender,$additionalInfo,$symptoms,$specialization){
    $sql="INSERT INTO sectioni (fullname,email,password,files, address ,gender,addinfo,symtoms,specialization)
    VALUES ('$fullName','$email','$password','$file', '$address' ,'$gender','$additionalInfo','$symptoms','$specialization')";
    return mysqli_query($conn,$sql);
}
function closeCon ($conn){
    return mysqli_close($conn);
}

function checkLogin($conn, $fullname, $password){
    $sql="SELECT * FROM sectioni WHERE fullname='$fullname' AND password='$password'";
    return mysqli_query($conn,$sql);

    
}





