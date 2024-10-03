<?php

require 'configK.php';

$ID=$_POST["MID"];

    $sql="DELETE FROM contact WHERE MID='$ID'";

    if($con->query($sql)){
        echo "Deleted";

    }
    else{
        echo "NOT Success";

    }

$con->close();

?>