<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Contact Us</title>
    <link rel="stylesheet" href="./css/contactK.css">
</head>
<body>
<div class="contact-form">
        <h2>Contact Us</h2>
        <form action="insert_conK.php" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="Fullname" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="Email" required>

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="Subject" required>

            <label for="message">Your Message</label>
            <textarea id="message" name="Message" rows="5" required></textarea>

            <input type="submit" class="btn" value="Send">
        </form>
    </div>

    <div class="vector">
            <img src="images/img.jpg" alt="">
        </div>

</body>
</html>
