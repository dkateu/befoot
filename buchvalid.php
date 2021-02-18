<?php
  session_start();
  $conn = mysqli_connect('localhost', 'root', '', 'lekeufac') or die(mysqli_connect_error());

  if(isset($_POST['submit'])) {
  $id= $_SESSION['id'];
  $name = $_POST['Fname'];
  $vorname = $_POST['Vname'];
  $email = $_POST['email'];
  $adresse = $_POST['strasse'] ." ". $_POST['hausnr'] ." ". $_POST['plz'] ." ". $_POST['city'];
  $handynummer = $_POST['vornr'] ." ". $_POST['number'];
  $spiel= $_POST['spiel'];
  $platznummer = $_POST['platznummer'];
  $zahlungsart = $_POST['zahlungsart'];
  $alters = $_POST['age'];
  $preis = 50;
  
  $insert= "INSERT INTO bestellung (KundenID,Nachname, Vorname,Email, Adress, Handynummer, SpielID, Platznummer, Zahlungsart, Alters) 
      VALUES ('$id','$name', '$vorname', '$email', '$adresse', '$handynummer','$spiel','$platznummer','$zahlungsart', '$alters')";
  $insert2= "INSERT INTO ticket (BestellungID, Zuschauername, Zuschauervorname, Preis) VALUES ((select BestellungID from bestellung order by

  BestellungID desc limit 1)  ,'$name', '$vorname',$preis)";

  $res= mysqli_query($conn, $insert);
  $res2=mysqli_query($conn, $insert2);

  if($res){
      echo "Topp";
  }

  echo "Ihre Buchung wurde erfolgreich abgeschlossen";
            echo "<br/>";
            header("location:MyAccount.php");

   }else{
     echo"Ihre Buchung wurde nicht durchgef�hrt bitte versuchen Sie noch mal !!";
     header("location:buchung.php");
   }
  
?>