
<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/booking.css">

</head>
<body>
<div class="background">

    
   <div class="container">
    <p class="header">
        Reserve a Parking Spot
    </p>
        <div class="slots">
        <div class="box"id="A-1">A-1<img src="./images/Car.png"></div>
        <div class="box" id="A-2">A-2<img src="./images/Car.png"></div>
        <div class="box"id="A-3">A-3<img src="./images/Car.png"></div>
        <div class="box"id="A-4">A-4<img src="./images/Car.png"></div>
        <div class="box"id="A-5">A-5<img src="./images/Car.png"></div>
        <div class="box"id="A-6">A-6<img src="./images/Car.png"></div>
        <div class="box"id="A-7">A-7<img src="./images/Car.png"></div>
        <div class="box"id="A-8">A-8<img src="./images/Car.png"></div>
        <div class="box"id="A-9">A-9<img src="./images/Car.png"></div>
        <div class="box"id="A-10">A-10<img src="./images/Car.png"></div>
        <div class="box"id="A-11">A-11<img src="./images/Car.png"></div>
        <div class="box"id="A-12">A-12<img src="./images/Car.png"></div>
        <div class="box"id="A-13">A-13<img src="./images/Car.png"></div>
        <div class="box"id="A-14">A-14<img src="./images/Car.png"></div>
        <div class="box"id="A-15">A-15<img src="./images/Car.png"></div>
        <div class="box"id="A-16">A-16<img src="./images/Car.png"></div>
        <div class="box"id="A-17">A-17<img src="./images/Car.png"></div>
        <div class="box"id="A-18">A-18<img src="./images/Car.png"></div>
        <div class="box"id="A-19">A-19<img src="./images/Car.png"></div>
        <div class="box"id="A-20">A-20<img src="./images/Car.png"></div>
        <div class="box"id="A-21">A-21<img src="./images/Car.png"></div>
        <div class="box"id="A-22">A-22<img src="./images/Car.png"></div>
        <div class="box"id="A-23">A-23<img src="./images/Car.png"></div>
        <div class="box"id="A-24">A-24<img src="./images/Car.png"></div>
        
        
        
        <div class="identify">
            <div class="reserve"><div class="txt1">Free</div></div>
            <div class="free"><div class="txt2">Reserved</div></div>
      </div>
       
      <div class="Navigation-page">
       
            <a href="Booking.html">1</a>
            
           
        
        
      <!------Booking Section-->
        
      <div class="booking-form" id="form">
       <form action="insertP.php" method="POST">
        <div class="box1">
            <div class="boxheader">
                <div class="close"></div>
                <h2 class="book">
                    Booking
                </h2>
               
            </div> 
            <div class="box2">
                <h3>Slot address</h3>
                <input type="text" name="slotnum" style="width:140px;border:2px solid black;margin-right:
                17px;border-radius:5px;padding:5px;"></h3>
            </div>
            
            <div class="box3">
                <h3>Check In</h3>
                <input type="datetime-local" id="in" name="intime" onchange="calcu()">
                <h3>Check Out</h3>
                <input type="datetime-local" id="out" name="outtime" onchange = "calcu()">
                <h3>Vehicle Number</h3>
                <input type="text"  name="vehiclenum">
                <h3>Total</h3>
            <h3 id="total">Rs:00.00</h3>             
            <input type="hidden" id="total" name="total">
        </div>   
        <button oninput="calcu()" id="confirm" value="confirm" >Confirm</button>
        </div>   
              
        </div>

<script src="./js/Booking.js"></script>
</body>
</html>