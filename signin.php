<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'lekeufac') or die(mysqli_connect_error());

if (isset($_POST['Login'])) {

  $email = $_POST['email'];
  $pass = $_POST['password'];

  $_SESSION['email'] = $email;

  echo $email;
  echo $pass;
  
  $sql = "SELECT * FROM login";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      if ($row['email'] == $email && $row['passwort'] == $pass) {

        header("location: alleSpiele.php");
      } else {
      }
    }
    echo 'Falsches Passwort oder Falscher E-Mail Adresse';
  } else {

    echo '0 results';
  }
}
?>