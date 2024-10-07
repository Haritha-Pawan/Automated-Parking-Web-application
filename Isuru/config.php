<?php
$con=new mysqli("localhost","root","","newvehicle");

if($con->connect_error)
{
  die("Connection failed".$con->connect_error);
}
else{
  echo "Sucessful!";
}


?>