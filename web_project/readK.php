<?php

require 'configK.php';

$sql="SELECT MID,FullName,Email,Subject,Message FROM contact";


$result=$con->query($sql);

if($result->num_rows>0)
{
    echo "<table border='1'>";
    while($row=$result->fetch_assoc())
    {
        echo"<tr>";
        echo "<td>".$row["MID"]."</td>"."<td>".$row["FullName"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["Subject"]."</td>"."<td>"."<td>".$row["Message"]."</td>";
        echo"</tr>";
    }
    echo "</table>";
}
else{
    echo "No Result";
}


$con->close();
?>