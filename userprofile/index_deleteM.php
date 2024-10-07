<?php



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
    <link rel="stylesheet" href="deleteM.css">
    <script>
    // JavaScript function for NIC validation (only numbers)
    function validateForm() {
        var nic = document.getElementById("id").value;
        
        // Check if NIC is empty
        if (nic.trim() === "") {
            alert("Please enter your NIC.");
            return false;
        }

        // Allow only numeric characters (digits)
        var nicPattern = /^[0-9]+$/;
        if (!nicPattern.test(nic)) {
            alert("Please enter a valid NIC (numbers only).");
            return false;
        }

        // If everything is valid, allow the form to be submitted
        return true;
    }
</script>
</head>
<body>


    <div class="header1">
        <h2>Delete details</h2>
        <form  method="post" action="deleteM.php" onsubmit="return validateForm()">
        <div class="name">
                <label for="id"><h2>NIC</h2></label>
                <input type="text" id="id" name="NIC" placeholder="Enter your NIC" autocomplete="off" >
            </div>

            <div class="button">
                <button type="submit" name="submit">Delete</button>

            </div>
            
        </form>
    </div>
</body>
</html>



