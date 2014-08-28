<html>
<head>
<title>Sending email using PHP</title>
</head>
<body>
<?php
   $to = "robertstepp1369@gmail.com";
   $subject = "This is subject";
   $message = "This is simple text message.";
   $header = "From:robertstepp1369@gmail.com \r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...";
   }
?>
</body>
</html>