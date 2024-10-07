<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
    <script>
    // Function to enable editing of input fields
    function enableEditing(inputId) {
        var inputField = document.getElementById(inputId);
        inputField.removeAttribute("disabled"); // Enable the input field
        inputField.focus(); // Focus on the input field
    }

    // Add event listeners to the edit icons after the DOM has loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Get all edit icons
        var editIcons = document.getElementsByClassName("edit");
        // Loop through each icon and attach a click event
        for (var i = 0; i < editIcons.length; i++) {
            editIcons[i].onclick = function() {
                // Get the associated input field ID from the preceding sibling
                var inputId = this.previousElementSibling.id; 
                enableEditing(inputId); // Call the function to enable editing
            };
        }
    });
</script>
</head>
<body>
<div class="container">
        <div class="aside">
            <div class="image">
                <img src="dp.jpg" alt="Profile Picture">
                <img src="dpchange.png" class="dpchange" alt="Change Profile Picture">
            </div>
            <div class="name">
                <h3 class="username">Malisha Karunarthna</h3>
                <h4 class="email">malisha26563@gmail.com</h4>
            </div>
        </div>
        <div class="right-side">
            <div class="header">
                <h2>Edit Details</h2>
                <div class="form">
                    <form method="POST" action="updateM.php">
                        <div class="secondary-details">
                            <label for="fname">Full Name</label>
                            <input type="text" id="fname" name="fullname" placeholder="Enter your full name" disabled>
                            <img src="pen.png" class="edit" alt="Edit Name">
                        </div>

                        <div class="secondary-details">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" disabled>
                            <img src="pen.png" class="edit" alt="Edit Email">
                        </div>

                        <div class="secondary-details">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" placeholder="Enter your address" required>
                        </div>

                        <div class="secondary-details">
                            <label for="NIC">NIC</label>
                            <input type="text" id="nic" name="NIC" placeholder="Enter NIC" required>
                        </div>
                        
                        <div class="secondary-details">
                            <label for="vehicle">Vehicle Type</label>
                            <input type="text" id="vehicle" name="vehicletype" placeholder="Enter vehicle type">
                        </div>

                        <div class="secondary-details">
                            <label for="vehiclenumber">Vehicle Number</label>
                            <input type="text" id="vehiclenumber" name="vehiclenumber" placeholder="Enter vehicle number" required>
                        </div>

                        <button type="submit" class="button">Update My Profile</button> 
                    </form> 
                    
                </div>
                <a href="index_deleteM.php"><button class="Dbutton">Delete details</button></a>
            </div>
        </div>
    </div> 
    <div class="ads">
        <h3>Display ads</h3>
    </div>
</body>
</html>