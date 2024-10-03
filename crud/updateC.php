<?php
require 'configC.php';

$Sid=$_POST["id"];
$Sname=$_POST["name"];
$Semail=$_POST["email"];
$Smobile=$_POST["mobile"];
$Spassword=$_POST["password"];

if(empty($Sid)||empty($Sname)||empty($Semail)||empty($Smobile)||empty($Spassword))
{
    echo "All required";
}
else
{
    $sql="UPDATE crud set name='$Sname',email='$Semail',mobile='$Smobile',password='$Spassword' WHERE id='$Sid'";

    if($con->query($sql))
    {
        echo "Updated";
    }
    else
    {
        echo "Not updated";
    }


}





?>