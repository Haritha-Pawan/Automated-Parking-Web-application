<?php

require 'configK.php';

$Fname=$_POST["Fullname"];
$Useremail=$_POST["Email"];
$subject=$_POST["Subject"];
$UserMess=$_POST["Message"];

$sql="INSERT INTO contact VALUES('','$Fname','$Useremail','$subject','$UserMess')";

if($con->query($sql))
{
    echo "Insert Successful";
}
else{
    echo "Error".$con->error;
}

$con->close();

?>