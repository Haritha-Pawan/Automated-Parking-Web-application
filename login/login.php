<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>login page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h2 class="logo">LOGO</h2>
            <nav class="navigation-bar">
                <a href="#">HOME</a>
                <a href="#">ABOUT</a>
                <a href="#">CONTACT US</a>
                <a href="#">FAQ</a>
                <button class="login-btn">LOGIN</button>
            </nav>
        </header>
        <div class="log-form">
            <span class="close"><ion-icon name="close"></ion-icon></span>
            <div class="form-box-login">
                <h1>Login</h1>
                <form method="POST" action="insert.php">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail">
                        </ion-icon></span>
                        <input type="email" name="email" required>
                        <lable>Email</lable>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-open">
                        </ion-icon></span>
                        <input type="password" name="password" required>
                        <lable>Password</lable>
                    </div>
                    <div class="forget-remember">
                        <label><input type="checkbox">Remember Me</label>
                        <a href="#">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn">Log In</button>
                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="vector-art"><img src="vec 1.avif" alt=""></div>
        <script src="Js.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>