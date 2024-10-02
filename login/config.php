<?php
$con=new mysqli("localhost","root","","automateparking");

if($con->connect_error)
{
    die("connection failed".$con->connect_error);

}else{
    echo 'Success';
}


?>