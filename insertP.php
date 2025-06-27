<?php
require './Chanaka/configC.php';


$slotnumber = $_POST['slotnum'];
$intime = $_POST['intime'];     
$outtime = $_POST['outtime']; 
$vehiclenum = $_POST['vehiclenum'];
$total = $_POST['total'];



$sql="INSERT INTO reservation_details VALUES ('','$slotnumber','$intime','$outtime','$vehiclenum','$total')";

if($con->query($sql))
{
    echo "Insert sucessful!";
}
else{
    echo "Error".$con->error;
}
$con->close();
?>
