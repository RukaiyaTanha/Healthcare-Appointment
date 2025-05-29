<?php 
session_start();
include "../model/db.php";





$username=$_SESSION['user'];



$conobj=createCon();




$sql="SELECT * FROM sectioni WHERE fullname='$username' " ;
$result=mysqli_query($conobj,$sql);
if (mysqli_num_rows($result)>0) {
    while ($row=mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Username: " . $row["fullname"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Password: " . $row["password"] . "<br>";
        echo "Symptoms: ". $row["symtoms"]."<br>";
        echo "<iframe src='" . $row["files"] . "' width='600' height='400'></iframe><br>";
    }
} else {
    echo "Invalid username or password.";
}


mysqli_close($conobj);
?>