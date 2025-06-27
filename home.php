


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/about.css">
</head>
<body>
   <?php
  include 'header.php';
?>
   <div class="title">
    <h1 class="header">Effortless Parking, Anytime, Anywhere<span> Parking </span></h1> 
    <div class="para">
        Discover the ultimate parking experience with our automated system. From real-time availability to seamless reservations, ParkPlus ensures that your parking is hassle-free and secure. Choose from flexible packages to fit your needs and enjoy the convenience of modern parking technology at your fingertips.
    </div>
   </div>

   <div class="image-slider">

   </div>
   
   <div class="progress">
    <div class="cir-1"><h2>1</h2></div> 
    <div class="line-1"></div>
    <div class="cir-2"><h2>2</h2></div> 
    <div class="line-2"></div>
    <div class="cir-3"><h2>3</h2></div> 

    <div class="details">
        <h3>Login</h3>
        <h3>Booking</h3>
        <h3>Parking</h3>
    </div>
   </div>
<div class="about" style="position:relative;top:490px;">
<?php

include 'newabout.php';
?>
</div>

<div class="footer" style="position:relative;top:500px;">
    <?php
    include 'footer.php';
    ?>
</div>


</body>
</html>