<?php
require '../db_connect.php';
$username = $_POST['username'];
$email = $_POST['email'];
$salt = $_POST['salt'];
$password = $_POST['password1'];
$hash = crypt($password, '$6$rounds=15000$'. $salt);
function failure() {
	header('Location: ../login_page.php');	
}
if (isset($username,$email,$hash,$salt))	{
	$sql = "INSERT INTO members (username,email,hash,salt) VALUES ('".$username."','".$email."','".$hash."','".$salt."')";
	$res = mysqli_query($con,$sql);
	if ($res)  {
		header('Location: ../login_page.php');		
	}	else  {
		header('Location: ../registration_page.php');
	} 
};
?>
