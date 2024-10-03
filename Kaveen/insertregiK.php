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

$con->close();

?>