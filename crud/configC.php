

<?php

$con=new mysqli("localhost","root","","user");

if($con->connect_error)
{
    die("connection faild".$con->connect_error);
}
else
{
    //echo "successful";
}

?>