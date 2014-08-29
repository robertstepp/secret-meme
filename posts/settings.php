<?php
require '../session.php';
require '../db_connect.php';
$background 		= " "; // Set no wallpaper if user only wants color 
// $backgroundcolor 	= $_POST['backgroundcolor'];
$background 		= $_POST['background'];
$fontsize 			= $_POST['fontsize'];
$fontcolor 			= $_POST['fontcolor'];
if (isset($backgroundcolor,$background,$fontcolor,$fontsize))  {
	$sql = "UPDATE settings SET background='" . $_POST['background'] . "',fontsize='" . $_POST['fontsize'] . "',fontcolor='" . $_POST['fontcolor'] . "' WHERE uid=" . $_SESSION['sess_user_id'];
$res = mysqli_query($con,$sql);
	if ($res)  {
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?result=success');		
	}	else  {
		echo $username . ' failed to create account.';
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?result=failure');
	} 
};
/* backgroundcolor='" . $_POST['backgroundcolor'] . "',*/
?>