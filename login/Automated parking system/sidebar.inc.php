<?php

include 'connection.php';
$sql = "SELECT * FROM reservationdetails";
$reservedet = $conn->query($sql);


$sql_total = "SELECT SUM(Payment) AS total_payment FROM reservationdetails";
$result_total = $conn->query($sql_total);
$total_payment = 0;

if($result_total->num_rows>0){
    $row_total = $result_total->fetch_assoc();
    $total_payment = $row_total['total_payment'];
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/admin.css">
    
</head>
<body>
    

<div class="container">
    <!----aside section strat-->
   <aside>
    <div class="top">
        <div class="logo">
            <h2>Park<span class="danger">Plus</span></h2>
        </div>
        <div class="close">
            <span><img src="./images/Admin/close.png" id="close"></i></span>
        </div>
     </div>

     <div class="sidebar">
        <a href="#"><img src="./images/Admin/menu.png"><h3>Dashbord</h3></a>
        <a href="#" class="active"><img src="./images/Admin/customer.png"><h3>Customer</h3></a>
        <a href="#"><img src="./images/Admin/analytics.png"><h3>Analytics</h3></a>
        <a href="#"><img src="./images/Admin/message.png"><h3>Message<span class="msg">14</span></h3></a>
        <a href="./Bokingslots/booking.php"><img src="./images/Admin/parking-area.png"><h3>Parking Slots</h3></a>
        <a href="#"><img src="./images/Admin/report.png"><h3>Report</h3></a>
        <a href="./parkingRate.php"><img src="./images/Admin/parking.png"><h3>Parking Rate</h3></a>
        <a href="#"><img src="./images/Admin/settings.png"><h3>settings</h3></a>
        <a href="adduser.php"><img src="./images/Admin/add-user.png"><h3>Add User</h3></a>
        <a href="#"><img src="./images/Admin/exit.png"><h3>Log Out</h3></a>

    </div>
   </aside>
    

    

         
    

                
    <!----main section end-->

    
            
        <!----end top-->


        
             
         
         </div>

     

         

    </div>



</div>















    
</body>
</html>


