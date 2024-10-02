<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "reservation";


$conn = new mysqli($server ,$username, $password,$db);

if($conn->connect_error)
{
    die("Failed");
}else{
    
}


?>