<?php

include_once('sidebar.inc.php');

$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "reservation";    

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID,SlotNumber,DATE_FORMAT(InTime,'%H %i') AS InTime,DATE_FORMAT(OutTime,'%H %i')AS OutTime,vehicleNumber,Payment FROM reservationdetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'>
            <tr>
                <th>PackID</th>
                <th>Package</th>
                <th>Validity Period</th>
                <th>Price</th>
                <th>action</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["ID"] . "</td>
                <td>" . $row["SlotNumber"] . "</td>
                <td>" . $row["InTime"] . "</td>
                <td>" . $row["InTime"] . "</td>
                
               <td>
    <a href='edit.php?id=" . $row["ID"] . "' class='edit-btn'>Edit</a>
    <a href='delete.php?id=" . $row["ID"] . "' class='delete-btn' onclick='return confirm(\"Are you sure you want to delete this item?\");'>Delete</a>
</td>

                   
             </tr>";
             
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/table.css">
</head>
<body>
    
</body>
</html>
