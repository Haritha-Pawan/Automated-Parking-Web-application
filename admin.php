<?php

include 'connection.php';
$sql = "SELECT * FROM reservation_details";
$reservedet = $conn->query($sql);


$sql_total = "SELECT SUM(total) AS total FROM reservation_details";
$result_total = $conn->query($sql_total);


if($result_total->num_rows>0){
    $row_total = $result_total->fetch_assoc();
    $total = $row_total['total'];
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
            <h2>Park<span>Plus</span></h2>
        </div>
        <div class="close">
            <span><img src="./images/Admin/close.png" id="close"></i></span>
        </div>
     </div>

     <div class="sidebar">
        <a href="./admin.php"><img src="./images/Admin/menu.png"><h3>Dashbord</h3></a>
        <a href="./userregtable.php" ><img src="./images/Admin/customer.png"><h3>Customer</h3></a>
        <a href="#"><img src="./images/Admin/analytics.png"><h3>Analytics</h3></a>
        <a href="./readK.php"><img src="./images/Admin/message.png"><h3>Message<span class="msg">14</span></h3></a>
        <a href="booking.php"><img src="./images/Admin/parking-area.png"><h3>Parking Slots</h3></a>
        <a href="./isuru/viewtableisuru.php"><img src="./images/Admin/report.png"><h3>Add Vehicle</h3></a>
        <a href="./parkingRate.php"><img src="./images/Admin/parking.png"><h3>Parking Rate</h3></a>
        
        
        <a href="adduser.php"><img src="./images/Admin/add-user.png"><h3>Add staff</h3></a>
        <a href="logout.php"><img src="./images/Admin/exit.png"><h3>Log Out</h3></a>

    </div>
   </aside>
    

    <!----main section strat-->
<main>
    <h1>Dashbord</h1>
    <div class="date">
        <input type="date"></div>

    <div class="insights">
        <div class="maininsights">
            <div class="box">
                <div class="details">
                    <img src="./images/Admin/parking-area.png" id="Available">
                    <h4>Available Slots</h4>
                    <h2>16</h2>
                    <small>Last 1 minutes ago</small>
                    <svg>
                    </svg>
                </div>
                
            </div>

            <div class="box">
                <div class="details">
                    <img src="./images/Admin/parking.png" id="total">
                    <h4>Total Slots</h4>
                    <h2>48</h2>
                    <small>Last 1 minutes ago</small>
                    <svg>
                    </svg>
                </div>
                
            </div>

            <div class="box">
                <div class="details">
                    <img src="./images/Admin/income.png" id="income">
                    <h4>Income </h4>
                    <h2>Rs:5300<?php echo ($total);?></h2>
                    <small>Last 1 minutes ago</small>
                    <svg>
                    </svg>
                </div>
                
            </div>
            

            
        </div>
            
    </div> 

    <div class="recent">
      
        <h1>Recent</h1>
        <div class="recent_box">
       
            <table>
                <thead>
                    <th>userID</th>
                    <th>Reserve Slot</th>
                    <th>In Time</th>
                    <th>Out Time</th>
                    <th>Vehicle Number</th>
                    <th>Total</th>
                  
                </thead>
                <tbody>
                <?php
        
        while($row = mysqli_fetch_assoc($reservedet)){
        
        ?>

                    <tr>
                        <td><?php echo $row["ID"];?></td>
                        <td><?php echo $row["slotnum"];?></td>
                        <td><?php echo $row["intime"];?></td>
                        <td><?php echo $row["outtime"];?></td>
                        <td><?php echo $row["vehiclenum"];?></td>
                        <td><?php echo $row["total"];?></td>
                        
                       
                    </tr>
                    
                    
                    <?php

                       }
                       ?>  
                   

                </tbody>

            
            </table>
        </div>
    </div>
   
</main>
    <!----main section end-->

    <div class="right">
        <div class="top">
            <button id="menu_bar">
                <img src="./images/Admin/hamburg.png">
            </button>
        </div>
        <div class="theme-trigger">
            <img src="dark.png">
            <img src="./images/Admin/light.png">
        </div>
        <div class="profile">
            <div class="info">
                <p><b>Amal</b></p>
                <p>Admin</p>
               <small class="text-muted"></small>
               <div class="profile-photo">
                <img src="./images/Admin/user-image.jpg">
               </div>
            </div>
        </div>
        <!----end top-->


        <div class="staff-updates">
            <h2>Staff Updates</h2>
        </div>

         <div class="update">
            <div class="profile-photo">
                <img src="./images/Admin/user-image.jpg">
            </div>
             <h4 class="message">
               <p><span>Warden :</span> &nbsp Recived Message</p>
             </h4>
            
            <div class="profile-photo">
                <img src="./images/Admin/manager.jpg">
            </div>
            <h4 class="message">
                <p><span>Manger :</span> &nbsp Recived Message</p>
              </h4>

              <div class="profile-photo">
                <img src="./images/Admin/maintanace.jpg">
            </div>
             <h4 class="message">
               <p><span>Maintanance Team :</span> &nbsp Recived Message</p>
             </h4>
             
         
         </div>

     

         

    </div>



</div>













<script src="./js/Booking.js"></script>

    
</body>
</html>


