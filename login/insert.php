<?php

require 'config.php';


$useremail=$_POST["email"];
$userpassword=$_POST["password"];

$sql="INSERT INTO login VALUES('$useremail','$userpassword')";

if($con->query($sql))
{
  echo "Insert Failed"; 
}

$con->close();
?>