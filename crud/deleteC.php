<?php

require 'configC.php';

$Sid=$_POST["id"];

$sql="DELETE FROM crud WHERE id='$Sid'";

if($con->query($sql))
{
    echo "Deleted";

}
else{
    echo "Not deleted";
}
?>