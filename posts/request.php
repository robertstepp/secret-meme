<?php
$from = $_POST['email'];
$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $from . " // " . $_POST['message'];
$retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      header('Location: ../login_page.php');
   }
   else
   {
      header('Location: ../requestaccount.php?result=failed');
   }
?>