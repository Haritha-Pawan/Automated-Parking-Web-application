<?php

require 'configK.php';

$Fname=$_POST["Fullname"];
$Useremail=$_POST["Email"];
$UserAddress=$_POST["Address"];
$Usernic=$_POST["NIC"];
$vType=$_POST["Vehicletype"];
$vNo=$_POST["VehicleNo"];
$passw=$_POST["Password"];
$cpassw=$_POST["cPassword"];

$sql="INSERT INTO userregister VALUES('$Fname','$Useremail','$UserAddress','$Usernic','$vType','$vNo','$passw','$cpassw')";

if($con->query($sql))
{
    echo "Insert Successful";
}
else{
    echo "Error".$con->error;
}





$result = $con->query($sql);


if ($result> 0) {
    echo "<table class='table'>
            <tr>
                <th>MID</th>
                <th>Name</th>
                <th>Email</th>
                <th>subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["FullName"] . "</td>
                <td>" . $row["Email"] . "</td>
                <td>" . $row["Address"] . "</td>
                <td>" . $row["NIC"] . "</td>
                <td>" . $row["VehicleType"] . "</td>
                <td>" . $row["VehicleNo"] . "</td>
                <td>" . $row["Password"] . "</td>
                <td>" . $row["ConfirmPassword"] . "</td>
               
                
               <td>
    <a href='updateformK.php?id=" . $row["NIC"] . "' class='edit-btn'>Reply</a>
    <a href='deleteformK.php?id=" . $row["NIC"] . "' class='delete-btn' onclick='return confirm(\"Are you sure you want to delete this item?\");'>Delete</a>
</td>

                   
             </tr>";
             
    }

    echo "</table>";
} else {
    echo "0 results";
}

$con->close();

?>