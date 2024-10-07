<?php
require 'configM.php';

$nic=$_POST["NIC"];

$sql="DELETE FROM updateuserprofile WHERE NIC='$nic'";

if($con->query($sql))
{
    echo "deleted";
}
else{

    echo "not deleted";
}

?>