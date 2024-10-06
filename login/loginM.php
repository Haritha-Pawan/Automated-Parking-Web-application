<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>login page</title>
        <link rel="stylesheet" href="styleM.css">
        <script>
            // JavaScript function to validate form
            function validateLoginForm() {
                // Get the values of the email and password fields
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                
                // Regular expression for validating email format
                const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

                // Validate email format
                if (!emailPattern.test(email)) {
                    alert('Please enter a valid email address.');
                    return false;
                }

                // Check if password is empty
                if (password === "") {
                    alert('Please enter your password.');
                    return false;
                }
                if(password.length<8){
                    alert("password must be at least 8 characters long");
                    return false;
                }

                // If all validation checks pass, allow the form to be submitted
                return true;
            }
        </script>
    </head>
    <body>
        <header>
         
        </header>
        <div class="log-form">
            <span class="close"><ion-icon name="close"></ion-icon></span>
            <div class="form-box-login">
                <h1>Login</h1>
                <form method="POST" action="log.php"  onsubmit="return validateLoginForm()">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail">
                        </ion-icon></span>
                        <input type="email" id="email" name="email" required>
                        <lable>Email</lable>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-open">
                        </ion-icon></span>
                        <input type="password" id="password" name="password">
                        <lable>Password</lable>
                    </div>
                    <div class="forget-remember">
                        <label><input type="checkbox">Remember Me</label>
                        <a href="#">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn" name="submit">Log in</button>
                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="vector-art"><img src="vec 1.avif" alt=""></div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>