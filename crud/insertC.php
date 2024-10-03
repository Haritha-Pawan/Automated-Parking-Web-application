<?php
require 'configC.php';


$Sname=$_POST["name"];
$Semail=$_POST["email"];
$Smobile=$_POST["mobile"];
$Spassword=$_POST["password"];

$sql="INSERT INTO crud VALUES ('','$Sname','$Semail','$Smobile','$Spassword')";

if($con->query($sql))
{
    echo "Insert sucessful!";
}
else{
    echo "Error".$con->error;
}
$con->close();
?>