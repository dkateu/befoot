<?php
include_once('connection.php');
function test_input($data) {
    
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}  
if ($_SERVER["REQUEST_METHOD"]== "POST") {
 
    $adminname = test_input($_POST["Adminname"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $kunde = $stmt->fetchAll();
     
    Foreach($users as $user) {  
        if(($user['adminname'] == $Adminname) && 
            ($user['password'] == $password)) {
                header("Location: dashboard.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
header ('location:dashboard.php');
?>