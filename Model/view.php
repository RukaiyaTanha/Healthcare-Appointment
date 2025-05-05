<?php
$fnameError = $emailError = $phoneError = $specializationError = $clinicNameError = $availableHoursError = $consultationFeeError = $experienceYearsError = $genderError = $additionalInfoError = "";

$fullName = $email = $phone = $specialization = $clinicName = $availableHours = $consultationFee = $experienceYears = $gender = $additionalInfo = "";

if(isset($_REQUEST["submit"])) 
{
    if(isset($_REQUEST["submit"])) {
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
        
        if(!empty($fullName) && !empty($email) && !empty($phone) && !empty($specialization) && !empty($clinicName) && !empty($availableHours) && !empty($consultationFee) && 
           !empty($experienceYears) && !empty($gender)) {
            
            echo "Form Submitted Successfully!<Br><Br><br>";
            echo "Submitted Data:";
            echo "<br>";
            echo "<br>";
            echo "Full Name: " . $fullName;
            echo "<br>";
            echo "Email: " . $email;
            echo "<br>";
            echo "Phone: " . $phone;
            echo "<br>";
            echo "Specialization: " . $specialization;
            echo "<br>";
            echo "Clinic Name: " . $clinicName;
            echo "<br>";
            echo "Available Hours: " . $availableHours;
            echo "<br>";
            echo "Consultation Fee: " . $consultationFee;
            echo "<br>";
            echo "Experience Years: " . $experienceYears;
            echo "<br>";
            echo "Gender: " . $gender;
            echo "<br>";
            echo "Additional Info: " . $additionalInfo;
            echo "<br>";
        }
    }
}
?>