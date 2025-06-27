<?php
require './Chanaka/configC.php';


$packID = $_POST['pack_ID'];
$Package_Name = $_POST['Package_Name'];     
$Validity_Period = $_POST['Validity_Period']; 
 $Price= $_POST['Price'];




$sql="INSERT INTO packages_details VALUES ('$packID','$Package_Name','$Validity_Period','$Price')";

if($con->query($sql))
{
    echo "Insert sucessful!";
}
else{
    echo "Error".$con->error;
}
$con->close();
?>
