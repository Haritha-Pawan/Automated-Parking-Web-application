<?php

$con=new mysqli("localhost","root","","automateparking");

if($con->connect_error)
{
    die("connection faild".$con->connect_error);

}

?>