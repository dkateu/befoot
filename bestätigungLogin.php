<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail Bei Login</title>
</head>
<body>
<?php
         $to = "xyz@somedomain.com";
         $subject = "This is subject";         
         $message = "<b>Sehr geehrte Her// Frau///
         Sie haben Sie Sich erfolgreich registriert 
         .</b>";
         $message .= "<h1>Erfolgreiche Registrierung</h1>";        
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>  
</body>
</html>
