<?php
require 'config.php';

$vid=$_POST["VID"];
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

if(empty($vid)||empty($vfname)||empty($vlname)||empty($vadd01)||empty($vadd02)||empty($vci)||empty($vpro)||empty($vnic)||empty($vemail)||empty($vpn)||empty($vvm)||empty($vvn)||empty($vmyfile))
{
    echo "All Required";
}
else
{
   $sql="UPDATE  addvehicle set FirstName='$vfname',LastName='$vlname',AddressLine01='$vadd01',AddressLine02='$vadd02',city='$vci',Province='$vpro',NIC='$vnic',Email='$vemail',PhoneNumber='$vpn',VehicleModel='$vvm',VehicleNumber='$vvn',SelectAFile='$vmyfile'  WHERE VehicleId ='$vid' ";
   if ($con->query($sql))
   {
    echo "Updated";
   }
   else{
    echo "Not Updated";
   }
}







?>