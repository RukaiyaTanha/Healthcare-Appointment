<html>
    <head>

    <title>Submit form</title>
</head>
<body>
<h1>Thank you!Sumbit Confirmed.Data given below</h1>
<?php
echo $_POST['fullName']."<br>".
$_POST['email']."<br>".
$_POST['phone']."<br>".
$_POST['address']."<br>".
$_POST['symptoms']."<br>".
$_POST['additionalInfo'];

if($_POST['fullName']==""){
    echo "Invalid name<br>";
    
}


if($_POST['email']==""){
    echo "Invalid email<br>";
}

if($_POST['phone']==""){
    echo "invalid phone<br>";
}
if($_POST['address']==""){
    echo "Invalid Adress<br>";
}
if($_POST['symptoms']==""){
    echo "Invalid symptoms<br>";
}
if($_POST['additionalInfo']==""){
    echo "Invalid info<br>";
}


?>


</body>