<?php
$from = $_POST['email'];
$to = "request@global-bookmarks.com";
$subject = $_POST['subject'];
$message = $from . " // " . $_POST['message'];
$mailHeader  = "From: $from\r\n";
$mailHeader .= "Reply-To: $from\r\n";
$mailHeader .= "X-Mailer: ".MYSITE."\r\n";
$retval = mail ($to,$subject,$message,$mailHeader);
   if( $retval == true )  
   {
      header('Location: ../login_page.php');
   }
   else
   {
      header('Location: ../requestaccount.php?result=failed');
   }
?>