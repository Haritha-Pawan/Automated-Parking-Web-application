<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Update Message</title>
    <link rel="stylesheet" href="./css/UformK.css">
</head>
<body>
<div class="contact-form">
        <h2>Update Message</h2>
        <form action="updateK.php" method="POST">
            <label for="ID">Message ID</label>
            <input type="text" id="ID" name="MID">

            <label for="name">Your Name</label>
            <input type="text" id="name" name="Fullname">

            <label for="email">Your Email</label>
            <input type="email" id="email" name="Email">

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="Subject">

            <label for="message">Your Message</label>
            <textarea id="message" name="Message" rows="5"></textarea>

            <input type="submit" class="btn" value="Update">
        </form>
    </div>

    <div class="vector">
            <img src="images/update.jpg" alt="">
        </div>

</body>
</html>