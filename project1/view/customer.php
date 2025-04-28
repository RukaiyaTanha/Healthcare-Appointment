
<!DOCTYPE html>
<html>
<head>
    <title>Patient Form</title>
   <link rel="stylesheet" type="text/css" href="../css/mycs.css">
</head>
<body>
    <h1>Online Healthcare System - Patient Form</h1>
    <form id="customerForm" action="submitp.php" method="POST">
        <div class="exp">Please fillup this form</div>
        <fieldset>
            <legend>Personal Information</legend>
            <table>
                        <tr>
                            <td><label for="fullName">Full Name:</label></td>
                            <td><input type="text" id="fullName" class="center" name="fullName" placeholder="Enter your full name" ><p id ="fnameError" class="error-message"></p></td>
                        </tr>
                        
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><input type="text" id="email" class="center" name="email" placeholder="Enter your email" ><p id="emailError" class="error-message"></p></td>
                        </tr>
                       
                        <tr>
                            <td><label for="phone">Phone:</label></td>
                            <td><input type="tel" id="phone" name="phone" class="center" placeholder="Enter your phone number" ><p id="phoneError" class="error-message"></p></td>
                        </tr>
                       
                      
                        <tr>
                    <td><label for="address">Address:</label></td>
                    <td><input type="address" id="address"class="center" name="address" placeholder="Enter your Adress"><p id ="addressError" class="error-message"></p></textarea></td>
</tr>

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

                        </table>
                        </div>
              </fieldset>
<br>
                        <fieldset>
            <legend>Medical Information</legend>
            <table >            
                        <tr>
                            <td><label for="medicalInfo">Medical Information:</label></td>
                            <td><textarea id="additionalInfo" class="over" name="additionalInfo" rows="4" cols="40" placeholder="Any additional details" ></textarea><p id="additionalInfoError" class="error-message"></p></td>
                        </tr>

                        <tr>
                    <td><label for="symptoms">Symptoms:</label></td>
                    <td><textarea id="symptoms"class="over" name="symptoms" placeholder="Enter some information"></textarea></td>
                </tr>

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
                    </table>
                </div>
            </div>
</fieldset>
            <div class="button-container">
                <input type="submit" id="para1"  value="Submit">
                <input type="reset" id="para1"  value="Clear">
            </div>
        </form>
    
    
</body>
</html>
