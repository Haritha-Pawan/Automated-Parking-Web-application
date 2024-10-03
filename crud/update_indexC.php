<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="stylesC.css">
</head>
<body>
    <div class="form-container">
        <h2>Update User</h2>
        <form action="updateC.php" method="POST">

            

            <div class="input-group">
                <label for="name">ID</label>
                <input type="text" id="name" name="id" placeholder="Enter your name">
            </div>
            
            <div class="input-group">
                <label for="email">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your email">
            </div>
            <div class="input-group">
                <label for="mobile">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your mobile">
            </div>
            <div class="input-group">
                <label for="password">Mobile</label>
                <input type="mobile" id="mobile" name="mobile" placeholder="Enter your password">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>

           

            
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
