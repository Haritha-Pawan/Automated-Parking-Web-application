<?php

require 'configK.php';


$Usernic=$_POST["NIC"];
$newpass=$_POST["Password"];

if(empty($Usernic)||empty($newpass))
{
    echo "All Required";
}
else{
    $sql="UPDATE userregister set  Password='$newpass' WHERE NIC='$Usernic'";

    if($con->query($sql))
    {
        echo "Updated";
    }
    else{
        echo "Not Updated";
    }
}


$con->close();

?>