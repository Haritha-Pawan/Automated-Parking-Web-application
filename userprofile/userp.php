<?php
include ('configM.php');

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'images/' . $file_name;

    // Insert the image file name into the database
    $query = mysqli_query($con, "INSERT INTO images (file) VALUES ('$file_name')");

    // Move the uploaded file to the "images" folder
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h2>Uploaded successfully</h2>";

        // Redirect to avoid the form resubmission issue
        header("Location: userp.php");
        exit(); // Always exit after a redirect
    } else {
        echo "<h2>Not uploaded</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <h3 style="font-size:60px;position:relative;bottom:280px;">park </h3>
    <h4 style="position:relative;font-size:50px;bottom:280px;color:#007dfe;">plus</h3>
    <!-- Form to upload an image -->

    <!-- Section to display uploaded images -->
    <div class="dp">
    <?php
    // Query to fetch all uploaded images from the database
    $res = mysqli_query($con, "SELECT * FROM images");
    while ($row = mysqli_fetch_assoc($res)) {
    ?>
        <img src="images/<?php echo $row['file']; ?>"style="width:300px;height:300px;" alt="Uploaded Image"/>
    <?php } ?>
    </div>
    <div class="formcs"></div>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image"  required  style="background-color:#007dfe;position:relative;top:220px;left:380px;">
        <br /><br />
        <button type="submit" name="submit" style="background-color:#007dfe;position:absolute;right:580px;bottom:80px;width:100px;">SUBMIT</button>
    </form>
    </div>
    

    <div class="profile-container">
        <!-- Profile Picture Section -->
        <div class="profile-pic-section">
            <img src="pf.jfif" alt="Profile Picture" class="profile-pic">
        </div>

        <!-- User Details Section -->
        <div class="profile-details-section">
            <h2>USER PROFILE</h2>
            <div class="profile-content">
                <?php
                include "readM.php";
                ?>
                <a href="user.php"><button class="button">Edit Details</button></a>
            </div>
        </div>
    </div>
</body>
</html>
