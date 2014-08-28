<?php
$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = $_POST['email'];
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