<?php

require 'configC.php';

$PackID=$_POST["packID"];

$sql="DELETE FROM packages_details WHERE id='$PackID'";

if($con->query($sql))
{
    echo "Deleted";

}
else{
    echo "Not deleted";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/stylesC.css">
</head>
<body>
    
</body>
</html>