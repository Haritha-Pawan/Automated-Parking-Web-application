
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/table.css">
    
    
</head>
<body>


<button style="width: 120px; height:40px; background-color:#007dfe;position:relative;left:280px;top:220px;border-radius:5px;border:none;cursor:pointer;"><a href="./Chanaka/indexC.php">Add User</a></button>
    
</body>
</html>

<?php


include_once('sidebar.inc.php');

$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "automated_parking_system";    

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM userregister";
$result = $conn->query($sql);










if ($result->num_rows > 0) {
    echo "<table class='table'>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>NIC</th>
                <th>VehicleType</th>
                <th>VehicleNo</th>
                <th>Password</th>
                <th>Action</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["FullName"] . "</td>
                <td>" . $row["Email"] . "</td>
                <td>" . $row["Address"] . "</td>
                <td>" . $row["NIC"] . "</td>
                <td>" . $row["VehicleType"] . "</td>
                <td>" . $row["VehicleNo"] . "</td>
                <td>" . $row["Password"] . "</td>
               
                
               
                
               <td>
    <a href='updateformK.php?id=" . $row["NIC"] . "' class='edit-btn'>Edit</a>
    
</td>

                   
             </tr>";
             
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();


?>



