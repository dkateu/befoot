<?php

 session_start();
    $conn=mysqli_connect('localhost','lekeufac','derrick24','lekeufac') or die(mysqli_connect_error());
$_SESSION ["conn"] = $conn;

?>
