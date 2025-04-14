<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Form</title>
    <link rel="stylesheet" href="doctor.css">
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="./images/doc.png" class="form-image">
            <div class="image-text">Online Healthcare Appointment</div>
        </div>

        <!-- Form with Background Image -->
        <form id="doctorForm" action="view.php" method="POST" >
            <div class="form-title">Create an Account</div>
            <div class="form-columns">
                <!-- Left Column -->
                <div class="column left-column">
                    <table>
                        <!-- Full Name -->
                        <tr>
                            <td><label for="fullName">Full Name:</label></td>
                            <td><input type="text" id="fullName" name="fullName" placeholder="Enter your full name" ><p id ="fnameError" class="error-message"></p></td>
                        </tr>
                        <!-- Email -->
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><input type="text" id="email" name="email" placeholder="Enter your email" ><p id="emailError" class="error-message"></p></td>
                        </tr>
                        <!-- Phone -->
                        <tr>
                            <td><label for="phone">Phone:</label></td>
                            <td><input type="tel" id="phone" name="phone" placeholder="Enter your phone number" ><p id="phoneError" class="error-message"></p></td>
                        </tr>
                        <!-- Specialization -->
                        <tr>
                            <td><label for="specialization">Specialization:</label></td>
                            <td>
                                <select id="specialization" name="specialization" >
                                    <option value="" disabled selected>Select your specialization</option>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Dermatology">Dermatology</option>
                                    <option value="Pediatrics">Pediatrics</option>
                                    <option value="Orthopedics">Orthopedics</option>
                                    <option value="Neurology">Neurology</option>
                                </select>
                                <p id="specializationError" class="error-message"></p>
                            </td>
                        </tr>
                        <!-- Clinic Name -->
                        <tr>
                            <td><label for="clinicName">Clinic Name:</label></td>
                            <td><input type="text" id="clinicName" name="clinicName" placeholder="Enter your clinic name" ><p id="clinicNameError" class="error-message"></p></td>
                        </tr>
                        
                    </table>
                </div>

                <!-- Right Column -->
                <div class="column right-column">
                    <table>
                        <!-- Available Hours -->
                        <tr>
                            <td><label for="availableHours">Available Hours:</label></td>
                            <td><input type="text" id="availableHours" name="availableHours" placeholder="e.g., 9 AM - 5 PM" ><p id="availableHoursError" class="error-message"></p></td>
                        </tr>
                        <!-- Consultation Fee -->
                        <tr>
                            <td><label for="consultationFee">Consultation Fee:</label></td>
                            <td><input type="number" id="consultationFee" name="consultationFee" placeholder="Enter fee" ><p id="consultationFeeError" class="error-message"></p></td>
                        </tr>
                        <!-- Experience Years -->
                        <tr>
                            <td><label for="experienceYears">Experience Years:</label></td>
                            <td><input type="number" id="experienceYears" name="experienceYears" placeholder="Enter years of experience" ><p id="experienceYearsError" class="error-message"></p></td>
                        </tr>
                        <!-- Gender -->
                        <tr>
                            <td><label>Gender:</label></td>
                            <td>
                                <input type="radio" id="male" name="gender" value="Male" >
                                <label for="male">Male</label>
                                <input type="radio" id="female" name="gender" value="Female">
                                <label for="female">Female</label>
                                <input type="radio" id="other" name="gender" value="Other">
                                <label for="other">Other</label>
                                <p id="genderError" class="error-message"></p>
                            </td>
                        </tr>
                        <!-- Additional Information -->
                        <tr>
                            <td><label for="additionalInfo">Additional Information:</label></td>
                            <td><textarea id="additionalInfo" name="additionalInfo" rows="4" cols="40" placeholder="Any additional details" ></textarea><p id="additionalInfoError" class="error-message"></p></td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Buttons -->
            <div class="button-container">
                <input type="submit" class="submit" value="Submit">
                <input type="reset" class="reset new" value="Clear">
            </div>
        </form>
    </div>
    <script src="doctor.js"></script>
</body>
</html>


