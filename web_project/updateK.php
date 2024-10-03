<?php

require 'configK.php';

$ID=$_POST["MID"];
$UpFname=$_POST["Fullname"];
$UpUseremail=$_POST["Email"];
$Upsubject=$_POST["Subject"];
$UpUserMess=$_POST["Message"];

if(empty($ID)||empty($UpFname)||empty($UpUseremail)||empty($Upsubject)||empty($UpUserMess))
{
    echo "All Required";
}
else{
    $sql="UPDATE contact set FullName ='$UpFname',Email='$UpUseremail', Subject='$Upsubject', Message='$UpUserMess'WHERE MID='$ID'";

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