<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$fnameError = $emailError = $phoneError = $specializationError = $clinicNameError = $availableHoursError = $consultationFeeError = $experienceYearsError = $genderError = $additionalInfoError = "";

$fullName = $email = $phone = $specialization = $clinicName = $availableHours = $consultationFee = $experienceYears = $gender = $additionalInfo = "";

    if(isset($_REQUEST["submit"])) 
    {
   
        if(empty($_REQUEST["fullName"])) {
            $fnameError = "Full Name is required";
        } else {
            $fullName = $_REQUEST["fullName"];
        }
        
        if(empty($_REQUEST["email"])) {
            $emailError = "Email is required";
        } elseif (!filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailError = "Please enter a valid email address";
        } else {
            $email = $_REQUEST["email"];
        }
        
        if(empty($_REQUEST["phone"])) {
            $phoneError = "Phone is required";
        } elseif (!preg_match('/^[0-9]{11}$/', $_REQUEST["phone"])) {
            $phoneError = "Phone number must be exactly 11 digits";
        } else {
            $phone = $_REQUEST["phone"];
        }
        
        if(empty($_REQUEST["specialization"])) {
            $specializationError = "Specialization is required";
        } else {
            $specialization = $_REQUEST["specialization"];
        }
        
        if(empty($_REQUEST["clinicName"])) {
            $clinicNameError = "Clinic Name is required";
        } else {
            $clinicName = $_REQUEST["clinicName"];
        }
        
        if(empty($_REQUEST["availableHours"])) {
            $availableHoursError = "Available Hours are required";
        } elseif (!is_numeric($_REQUEST["availableHours"])) {
            $availableHoursError = "Hours must be a number";
        } else {
            $availableHours = $_REQUEST["availableHours"];
        }
        
        if(empty($_REQUEST["consultationFee"])) {
            $consultationFeeError = "Consultation Fee is required";
        } else {
            $consultationFee = $_REQUEST["consultationFee"];
        }
        
        if(empty($_REQUEST["experienceYears"])) {
            $experienceYearsError = "Experience Years are required";
        } else {
            $experienceYears = $_REQUEST["experienceYears"];
        }
        
        if(empty($_REQUEST["gender"])) {
            $genderError = "Gender is required";
        } else {
            $gender = $_REQUEST["gender"];
        }

        if (isset($_REQUEST["additionalInfo"])) {
            $additionalInfo = $_REQUEST["additionalInfo"];
        } else {
            $additionalInfo = "";
        }

        // File upload
        /*if (!empty($_FILES["myfile"]["name"] )) {
            echo $_FILES["myfile"]["name"];
        } else{
            echo "No file is uploaded.";
        }*/
        if ($_FILES["myfile"]["name"] == "") {
            echo "No file is uploaded.";
        } else{
            if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Upload/".$_FILES["myfile"]["name"])){
                echo "File uploaded successfully.";
            }
        }

        if(!empty($fullName) && !empty($email) && !empty($phone) && !empty($specialization) && !empty($clinicName) && !empty($availableHours) && !empty($consultationFee) && 
           !empty($experienceYears) && !empty($gender)) {
            
            echo "Form Submitted Successfully!<Br><Br><br>";
            echo "Submitted Data:"."<br>"."<br>";
            echo "Full Name: " . $fullName ."<br>";           
            echo "Email: " . $email ."<br>";           
            echo "Phone: " . $phone ."<br>";           
            echo "Specialization: " . $specialization ."<br>";           
            echo "Clinic Name: " . $clinicName ."<br>";           
            echo "Available Hours: " . $availableHours ."<br>";          
            echo "Consultation Fee: " . $consultationFee ."<br>";          
            echo "Experience Years: " . $experienceYears . "<br>";           
            echo "Gender: " . $gender . "<br>";         
            echo "Additional Info: " . $additionalInfo . "<br>";
        
        }   
    }
?>