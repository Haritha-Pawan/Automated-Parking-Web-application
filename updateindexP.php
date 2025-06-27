
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Update Package Details</title>
    <link rel="stylesheet" href="./css/UformK.css">
</head>
<body>
<div class="contact-form">
        <h2>Update Package details</h2>
        <form action="updateP.php" method="POST">
              
        <div class="error">
                <p id="result"></p>
                </div>    
                    <lable>Package ID</lable>
                    <input type="text" name="packID">
                        
                    <lable>Package Name</lable>
                    <input type="text" name="Package_Name">

                    <lable>Validity Period</lable>
                    <input type="text" name="Validity_Period">

                    <lable>Package price</lable>
                    <input type="text" name="Price">
                    
                    <button type="submit" class="btn">Update</button>
    
        </form>
    </div>



</body>
</html>
