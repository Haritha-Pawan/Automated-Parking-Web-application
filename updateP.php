



<?php
require './Chanaka/configC.php';

$pid=$_POST["packID"];
$pname=$_POST["Package_Name"];
$pperiod=$_POST["Validity_Period"];
$price=$_POST["Price"];

if(empty($pid)||empty($pname)||empty($pperiod)||empty($price))
{
    echo "All required";
}
else
{
    $sql="UPDATE packages_details set Package_Name='$pperiod',Validity_Period='$pperiod',Price='$price' WHERE packID='$pid'";

    if($con->query($sql))
    {
        echo "Updated";
    }
    else
    {
        echo "Not updated";
    }


}





?>