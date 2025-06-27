<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="./css/stylesC.css">

    

</head>
<body>
    <div class="form-container">
        <h2>Delete Packages</h2>
        <form action="deleteP.php" method="POST" >

            

            <div class="input-group">
                <label for="ID">Package ID</label>
                <input type="text" id="name" name="packID" placeholder="Enter package Id" autocomplete="off">
            </div>
            
            

            <button type="submit">Delete</button>
        </form>
    </div>
</body>
</html>

