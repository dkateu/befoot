<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: adminlogin.php');
}
?>
 
<?php
//including the database connection file
include("connection.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM Ticket WHERE TicketsID=$TicketsID");
 
//redirecting to the display page (dasgboard.php in our case)
header("Location:dashboard.php");
?>