<?php

require 'configC.php';

$sql="SELECT id,name,email,mobile,password FROM crud";

$result=$con->query($sql);

if($result->num_rows>0)
{
    echo "<table table border='1'>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["mobile"]."</td> "."<td>".$row["password"]."</td>";
        echo "<tr>";

    }
   echo "</table>";
}
else
{
    echo "No result";
}

$con->close();

?>