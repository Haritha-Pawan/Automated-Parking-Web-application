<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Change Password</title>
    <link rel="stylesheet" href="./css/UformK.css">
</head>
<body>
<div class="contact-form">
        <h2>Change Password</h2>
        <form action="./updateK.php" method="POST">
              
        <div class="error">
                <p id="result"></p>
                </div>    
                    <lable>Enter Your NIC:</lable>
                    <input type="text" name="NIC">
                        
                    
                    <lable> Enter New Password:</lable>
                    <input type="Password" name="Password"  >
                    
                    <button type="submit" class="btn">Change</button>
    
        </form>
    </div>

    <div class="vector">
            <img src="images/update.jpg" alt="">
        </div>

</body>
</html>