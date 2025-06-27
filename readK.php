<?php

include_once('sidebar.inc.php');

$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "automated_parking_system";    

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT* FROM Contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'>
            <tr>
                <th>MID</th>
                <th>Name</th>
                <th>Email</th>
                <th>subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["MID"] . "</td>
                <td>" . $row["FullName"] . "</td>
                <td>" . $row["Email"] . "</td>
                <td>" . $row["Subject"] . "</td>
                <td>" . $row["Message"] . "</td>
               
                
               <td>
    <a href='updateformK.php?id=" . $row["MID"] . "' class='edit-btn'>Reply</a>
    <a href='deleteformK.php?id=" . $row["MID"] . "' class='delete-btn' onclick='return confirm(\"Are you sure you want to delete this item?\");'>Delete</a>
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
    <link rel="stylesheet" href="./css/delete.css">
</head>
<body>
    
</body>
</html>
