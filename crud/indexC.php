
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="stylesC.css">

    <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var mobile = document.getElementById('mobile').value;
            var password = document.getElementById('password').value;

            if (name === "") {
                alert("Name must be filled out");
                return false;
            }

            if (email === "") {
                alert("Email must be filled out");
                return false;
            }

            
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address");
                return false;
            }

            if (mobile === "") {
                alert("Mobile number must be filled out");
                return false;
            }

            
            if (mobile.length !== 10 || isNaN(mobile)) {
                alert("Please enter a valid 10-digit mobile number");
                return false;
            }

            if (password === "") {
                alert("Password must be filled out");
                return false;
            }

            
            if (password.length < 8) {
                alert("Password must be at least 8 characters long");
                return false;
            }

            
            return true;
        }
    </script>

</head>
<body>
    <div class="form-container">
        <h2>Add user</h2>
        <form action="insertC.php" method="POST" onsubmit="return validateForm()">

            

            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" autocomplete="off">
            </div>
            
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" autocomplete="off">
            </div>
            <div class="input-group">
                <label for="mobile">Mobile</label>
                <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile" autocomplete="off">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" autocomplete="off">
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

