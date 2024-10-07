<?php
require'config.php';

$vfname=$_POST["FN"];
$vlname=$_POST["LN"];
$vadd01=$_POST["add01"];
$vadd02=$_POST["Add02"];
$vci=$_POST["city"];
$vpro=$_POST["Province"];
$vnic=$_POST["NIC"];
$vemail=$_POST["Email"];
$vpn=$_POST["PN"];
$vvm=$_POST["VM"];
$vvn=$_POST["VN"];
$vmyfile=$_POST["MyFile"];

$sql="INSERT INTO  addvehicle VALUES ('','$vfname','$vlname','$vadd01','$vadd02','$vci','$vpro','$vnic','$vemail','$vpn','$vvm','$vvn','$vmyfile')";

if($con->query($sql))
{
    echo "Insert Successful";

}
    
else
{
    echo "Error".$con->error;
}


$con->close();

?>