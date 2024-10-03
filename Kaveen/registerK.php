
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register page</title>
        <link rel="stylesheet" href="./css/rformK.css">
    </head>
    <body>
    <form method="POST" action="insertregiK.php" name="Formfill" onsubmit="return validation()">
        <div class="reg-form">
        <h1>Register</h1>
            <div class="form-box-register">
                <div class="error">
                <p id="result"></p>
                </div>
                <div class="input-box">
                        <input type="text" name="Fullname" >
                        <lable>Full Name:</lable>
                    </div>
                    <div class="input-box">
                    <input type="text" name="Email" >
                    <lable>Email:</lable>
                    </div>
                    <div class="input-box">
                        <input type="text" name="Address">
                        <lable>Address:</lable>
                    </div>
                    <div class="input-box">
                        <input type="text" name="NIC">
                        <lable>NIC:</lable>
                    </div>
                    <div class="input-box">
                        <input type="text" name="Vehicletype">
                        <lable>Vehicle Type:</lable>
                    </div>
                    <div class="input-box">
                        <input type="text" name="VehicleNo">
                        <lable>Vehicle No.:</lable>
                    </div>
                    <div class="input-box">
                        <input type="Password" name="Password" >
                        <lable>Password:</lable>
                    </div>
                    <div class="input-box">
                        <input type="Password" name="cPassword" >
                        <lable>Confirm Password:</lable>
                    </div>
                    <div class="remember">
                        <label><input type="checkbox">Remember Me</label>
                    </div>
                    <input type="submit" class="btn" value="Register">
                    <div class="login">
                        <p>Already have an account? <a href="#">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="vectors">
            <img src="images/park.avif" alt="">
        </div>
        <script src="./js/scriptK.js"></script>

    </body>
</html>