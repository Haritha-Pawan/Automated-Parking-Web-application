<?php

require 'configM.php';

$fname=$_POST["fullname"];
$email=$_POST["email"];
$address=$_POST["address"];
$nic=$_POST["NIC"];
$vtype=$_POST["vehicletype"];
$vnumber=$_POST["vehiclenumber"];

if(empty($fname)||empty($email)||empty($address)||empty($nic)||empty($vtype)||empty($vnumber))
{
    echo "all required";
}
else
{
    $sql="UPDATE updateuserprofile SET fullname='$fname',email='$email',address='$address',	vehicletype='$vtype',vehiclenumber='$vnumber' WHERE NIC='$nic'";

    if($con->query($sql))
    {
        echo "updated";
    }
    else{
        echo "not updated";
    }
}




?>