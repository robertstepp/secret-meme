<?php
ob_start();
session_start();
require '../db_connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$username = mysql_real_escape_string($username);

$query = "SELECT id,username,hash,salt FROM members WHERE username = '".$_POST['username']."';";
$result = mysqli_query($con,$query);
if (mysql_num_rows($result) == 0)	{
	header('Location: ../login_page.php');
}
$userData = mysqli_fetch_array($result,MYSQL_ASSOC);
$submithash = crypt($password, '$6$rounds=15000$'.$userData['salt']);
if ($submithash != $userData['hash'])	{
	header('Location: ../login_page.php');
}	else  {
	session_regenerate_id();
	$_SESSION['sess_user_id'] = $userData['id'];
	$_SESSION['sess_username'] = $userData['username'];
	$_SESSION['start'] = time(); // Taking now logged in time.
	// Ending a session in 30 minutes from the starting time.
	$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
	session_write_close();
	header('Location: ../index.php');
}
?>