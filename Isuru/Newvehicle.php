<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Vehicle Form</title>
    <link rel="stylesheet" href="vehicle.css">
</head>
<body>
    <div class="form-container">
        <form method="POST" action="newinsert.php" onsubmit="return validateForm()">
            <h2>Add Vehicle Form</h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="FirstName">First Name :</label>
                    <input type="text" name="FN">
                </div>
                <div class="form-group">
                    <label for="LastName">Last Name :</label>
                    <input type="text" name="LN">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="AddressLine01">Address Line 01 :</label>
                    <input type="text" name="add01">
                </div>
                <div class="form-group">
                    <label for="AddressLine02">Address Line 02 :</label>
                    <input type="text" name="Add02">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="city">City :</label>
                    <input type="text" name="city">
                </div>
                <div class="form-group">
                    <label for="Province">Province :</label>
                    <input type="text" name="Province">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="NIC">NIC :</label>
                    <input type="text" name="NIC">
                </div>
                <div class="form-group">
                    <label for="Email">Email :</label>
                    <input type="email" id="Eemail" name="Email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="PhoneNumber">Phone Number :</label>
                    <input type="text" id="PpN" name="PN">
                </div>
                <div class="form-group">
                    <label for="VehicleModel">Vehicle Model :</label>
                    <input type="text" name="VM">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="VehicleNumber">Vehicle Number :</label>
                    <input type="text" name="VN">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="myfile">Select A File :</label>
                    <input type="file" name="MyFile">
                </div>
            </div>
            <div class="form-row button-row">
                <button type="submit" class="submit-btn">Submit</button>
                
                    <button type="reset" class="cancel-btn">Cancel</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        function validateForm() {
            const Email = document.querySelector('input[name="Email"]').value;
            const phoneNumber = document.querySelector('input[name="PN"]').value;

            // Email validation regex
            const emailPattern = /^[^\s@+-]+@[^\s@]+\.[^\s@]+$/;

            if (!emailPattern.test(Email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            // Phone number validation (only digits and a specific length, e.g., 10 digits)
            const phonePattern = /^\d{10}$/; // Adjust the regex as needed
            if (!phonePattern.test(phoneNumber)) {
                alert("Please enter a valid phone number (10 digits only).");
                return false;
            }

            return true; // If both fields are valid
        }
    </script>
</body>
</html>
