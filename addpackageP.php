
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/table.css">
    
    
</head>
<body>


<button style="width: 120px; height:40px; background-color:#007dfe;position:relative;left:280px;top:220px;border-radius:5px;border:none;cursor:pointer;"><a href="insertpackindex.php">Add Package</a></button>
    
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
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM packages_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'>
            <tr>
                <th>packID</th>
                <th>Package_Name</th>
                <th>Validity_period</th>
                <th>Price</th>
                <th>action</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["packID"] . "</td>
                <td>" . $row["Package_Name"] . "</td>
                <td>" . $row["Validity_period"] . "</td>
                <td>" . $row["Price"] . "</td>
                
                
               <td>
    <a href='updateindexP.php?id=" . $row["PackID"] . "' class='edit-btn'>Edit</a>
    <a href='deleteindexP.php?id=" . $row["packID"] . "' class='delete-btn' onclick='return confirm(\"Are you sure you want to delete this item?\");'>Delete</a>
</td>

                   
             </tr>";
             
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>



