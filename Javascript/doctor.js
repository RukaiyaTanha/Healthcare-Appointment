document.getElementById("doctorForm").addEventListener("submit", doctorFunction);

function doctorFunction(e) 
{
    let isValid = true;

    let fullName = document.getElementById("fullName").value;
    if (fullName == "") {
        document.getElementById("fnameError").innerHTML = "Please enter your full name";
        isValid = false;
    }

    let email = document.getElementById("email").value;
    if (email == "") {
        document.getElementById("emailError").innerHTML = "Please enter your email";
        isValid = false;
    } 
    else if (email.indexOf("@") == -1) {
        document.getElementById("emailError").innerHTML = "Email must contain @ symbol";
        isValid = false;
    }

    let phone = document.getElementById("phone").value;
    if (phone == "") {
        document.getElementById("phoneError").innerHTML = "Please enter your phone number";
        isValid = false;
    } 
    else if (isNaN(phone)) {
        document.getElementById("phoneError").innerHTML = "Phone number must contain only numbers (0-9)";
        isValid = false;
    } 
    else if (phone.length < 10) {
        document.getElementById("phoneError").innerHTML = "Phone number must be at least 10 digits";
        isValid = false;
    }

    let specialization = document.getElementById("specialization").value;
    if (specialization == "") {
        document.getElementById("specializationError").innerHTML = "Please select your specialization";
        isValid = false;
    }

    let clinicName = document.getElementById("clinicName").value;
    if (clinicName == "") {
        document.getElementById("clinicNameError").innerHTML = "Please enter your clinic name";
        isValid = false;
    }

    let availableHours = document.getElementById("availableHours").value;
    if (availableHours == "") {
        document.getElementById("availableHoursError").innerHTML = "Please enter available hours";
        isValid = false;
    }

    let consultationFee = document.getElementById("consultationFee").value;
    if (consultationFee == "") {
        document.getElementById("consultationFeeError").innerHTML = "Please enter consultation fee";
        isValid = false;
    }

    let experienceYears = document.getElementById("experienceYears").value;
    if (experienceYears == "") {
        document.getElementById("experienceYearsError").innerHTML = "Please enter years of experience";
        isValid = false;
    }

    let gender = document.querySelector('input[name="gender"]:checked');
    if (gender == null){
        document.getElementById("genderError").innerHTML = "Please select your gender";
        isValid = false;
    }

    let additionalInfo = document.getElementById("additionalInfo").value;
    if (additionalInfo == "") {
        document.getElementById("additionalInfoError").innerHTML = "Please enter additional information";
        isValid = false;
    }

    if (isValid == false) {
        e.preventDefault();
    }
}


