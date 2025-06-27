<?php      
    include('configM.php');  
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from userregister where Email = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            if($row['Role'] == 'Admin'){
                echo "<script>window.location.href = 'admin.php';</script>";
            } else if($row['Role'] == 'User'){
                echo "<script>window.location.href = 'afterlogin.php';</script>";  
            } else {
                echo "<script>alert('Invalid role. Contact support.');</script>";
                echo "<script>window.location.href = 'loginM.php';</script>";
            }
        } else {  
            echo "<script>alert('Invalid email or password');</script>";
            echo "<script>window.location.href = 'loginM.php';</script>";
        }    
?>