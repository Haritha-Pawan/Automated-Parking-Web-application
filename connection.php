<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "automated_parking_system";


$conn = new mysqli($server ,$username, $password,$db);

if($conn->connect_error)
{
    die("Failed");
}else{
    
}


?>