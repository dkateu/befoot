<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=//La seconde page ex.:envoi.php>, initial-scale=1.0">


    <title>Storno Mail</title>
</head>
<body>
<?php 

$msg = "Nom:\t$Nomr\n";
$msg .= "E-mail:\t$email\n";
$msg .= "Message:\t$message\n\n";

$recipient = "dlekeufack@gmail.com";
$subject = "Stornierungsbestätigung";

$mailheaders = "From: Befoot<> \n";
$mailheaders .= "Reply-To: $CP\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Stornierungsbestätigung</TITLE></HEAD><BODY>";
echo "<H1 align=center>Sehr geehrte Herr/Frau, $nom </H1>";
echo "<P align=center> wir bedanken Ihnen für Ihre Anfrage auf eine Stornierung Ihres Tickets für das Spiel.
Hiermit bestätigen wir die Stornierung Ihres Tickets für das Spiel des Wettkampf."<br>
"Sie können Jede Zeit noch Ihr Ticket wider Kaufen"<br>
"Wir stehen Ihnen Jeder Zeit zur Verfügung und sind für Sie da!!!" <br>
"Your Befoot Team" <br>
<a href="index.html">Befoot</a> ;
echo "Mail gesendet !</P>";
echo "</BODY></HTML>";

?> 
</body>
</html>