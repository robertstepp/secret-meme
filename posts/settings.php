<?php
require '../session.php';
require '../db_connect.php';
$background 		= " "; // Set no wallpaper if user only wants color 
$fontsize  			= "1";
$backgroundcolor 	= $_POST['backgroundcolor'];
$background 		= $_POST['background'];
$fontsize 			= $_POST['fontsize'];
$fontcolor 			= $_POST['fontcolor'];
if (isset($backgroundcolor,$background,$fontcolor,$fontsize))  {
	$sql = "INSERT INTO settings (uid,background,backgroundcolor,fontsize,fontcolor) VALUES (" . $_SESSION['sess_user_id'] . ",'" . $_POST['background'] . "','" . $_POST['backgroundcolor'] . "','" . $_POST['fontsize'] . "','" . $_POST['fontcolor'] . "')";
	$query = "SELECT id,uid FROM settings WHERE uid=" . $_SESSION['sess_user_id'] . ";";
	$result = mysqli_query($con,$query);
	if (mysqli_num_rows($result) == 1)	{
		$sql = "UPDATE settings SET backgroundcolor='" . $_POST['backgroundcolor'] . "', background='" . $_POST['background'] . "',fontsize='" . $_POST['fontsize'] . "',fontcolor='" . $_POST['fontcolor'] . "' WHERE uid=" . $_SESSION['sess_user_id'];
	}
	$res = mysqli_query($con,$sql);
	if ($res)  {
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?result=success');		
	}	else  {
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?result=failure');
	}
}; 
?>
