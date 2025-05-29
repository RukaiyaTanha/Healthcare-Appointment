<?php 
session_start();
include"../model/db.php";
if(isset($_REQUEST["login"])){
   
    $conn=createcon();

    $result=checkLogin($conn,$_REQUEST["fullname"],$_REQUEST["password"]);
    if(mysqli_num_rows($result)>0){
        $_SESSION['user']=$_REQUEST["fullname"];
       
        
        header("Location:../view/profile.php");
    }
    else{

 echo "User not found";
    }
}