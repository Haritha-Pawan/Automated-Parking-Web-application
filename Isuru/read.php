<?php
require 'config.php';

$sql="SELECT *  FROM addvehicle";

$result = $con->query($sql);

if($result->num_rows>0)
{
    echo"<table border ='1'>";
   while($row=$result->fetch_assoc())
   {
    echo"<tr>";
    echo "<td>".$row["FirstName"]."</td>"."<td>".$row["LastName"]."</td>"."<td>".$row["AddressLine01"]."</td>"."<td>".$row["AddressLine02"]."</td>"."<td>".$row["City"]."</td>"."<td>".$row["Province"]."</td>"."<td>".$row["NIC"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["PhoneNumber"]."</td>"."<td>".$row["VehicleModel"]."</td>"."<td>".$row["VehicleNumber"]."</td>"."<td>".$row["SelectAFile"]."</td>";
   echo"</tr>";
    }
 echo "<table>"; 
}
else
{
    echo "No results";
}
$con->close();

?>