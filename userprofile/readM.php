<?php

require 'configM.php';


$sql="SELECT * FROM updateuserprofile";

$result=$con->query($sql);

if($result->num_rows>0)
{
    
    while($row=$result->fetch_assoc())
    {
        
        echo "Full Name: " . $row["fullname"] . "<br><br>";
        echo "Email: " . $row["email"] . "<br><br>";
        echo "Address: " . $row["address"] . "<br><br>";
        echo "NIC: " . $row["NIC"] . "<br><br>";
        echo "Vehicle Type: " . $row["vehicletype"] . "<br><br>";
        echo "Vehicle Number: " . $row["vehiclenumber"] . "<br><br>";
        

    }
    

}
else
{
    echo "no result";
}
$con->close();

?>