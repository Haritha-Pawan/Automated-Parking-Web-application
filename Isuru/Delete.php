<?php
require 'config.php';

$vid=$_POST["VID"];

$sql="DELETE  FROM  addvehicle WHERE VehicleId='$vid'";

if($con->query($sql))
{
    echo " Deleted!";
}
else{
    echo"Not Success!";
}


?>