<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Vehicle Form</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <div class="form-container">
        <form  method="POST" action="Update.php">
            <h2>Update Vehicle Form</h2>

            <div class="form-row">
                <div class="form-group">
                    <label for="Vehicle-Id"> Vehicle Id:</label>
                    <input type="text"  name="VID">
                </div>
             </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="FirstName">First Name :</label>
                    <input type="text"  name="FN">
                </div>
                <div class="form-group">
                    <label for="LastName">Last Name :</label>
                    <input type="text"  name="LN">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="AddressLine01">Address Line 01 :</label>
                    <input type="text"  name="add01">
                </div>
                <div class="form-group">
                    <label for="AddressLine02">Address Line 02 :</label>
                    <input type="text"  name="Add02">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="city">City :</label>
                    <input type="text"  name="city">
                </div>
                <div class="form-group">
                    <label for="Province">Province :</label>
                    <input type="text"  name="Province">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="NIC">NIC :</label>
                    <input type="text" name="NIC">
                </div>
                <div class="form-group">
                    <label for="Email">Email :</label>
                    <input type="email"  name="Email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="PhoneNumber">Phone Number :</label>
                    <input type="text"  name="PN">
                </div>
                <div class="form-group">
                    <label for="VehicleModel">Vehicle Model :</label>
                    <input type="text"  name="VM">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="VehicleNumber">Vehicle Number :</label>
                    <input type="text"  name="VN">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="myfile">SelectAFile :</label>
                    <input type="file"  name="MyFile">
                </div>
            </div>
            <div class="form-row button-row">
                <button type="submit" class="submit-btn">Update</button>
               
            </div>
        </form>
    </div>
    
</body>
</html>