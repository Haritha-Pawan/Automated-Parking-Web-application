<?php
$con=new mysqli("localhost","root","","automated_parking_system");

if($con->connect_error)
{
    die("Connection failed".$con->connect_error);
}



?>