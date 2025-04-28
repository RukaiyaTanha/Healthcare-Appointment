<!DOCTYPE html>
<html>
<head>
    <title>Form Results</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["fullName"]) || empty($_POST["email"]) || empty($_POST["phone"])) 
        {
            echo "<h2>Invalid Submission</h2>";
            echo "<p>All fields are required. Please go back and fill the form.</p>";
        } 
        else 
        {
            echo "<h1>Form Submitted Successfully!</h1><br>";
            echo "<h2>Submitted Data:</h2>";
            echo "<p><strong>Name:</strong> " . $_POST["fullName"] . "</p>";
            echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
            echo "<p><strong>Phone:</strong> " . $_POST["phone"] . "</p>";
            echo "<p><strong>Specialization:</strong> " . $_POST["specialization"] . "</p>";
            echo "<p><strong>Clinic Name:</strong> ".$_POST["clinicName"]."</p>";
            echo "<p><strong>Available Hours:</strong> " . $_POST["availableHours"] . "</p>";
            echo "<p><strong>Consultation Fee:</strong> ".$_POST["consultationFee"]."</p>";
            echo "<p><strong>Experience Years:</strong> ".$_POST["experienceYears"]."</p>";
            echo "<p><strong>Gender:</strong> ".$_POST["gender"]."</p>";
            echo "<p><strong>Additional Info:</strong> ".$_POST["additionalInfo"]."</p>";
        }
    }
    else {
        echo "<h1>No data submitted. Please submit the form first.</h1>";
    }
    ?>
</body>
</html>