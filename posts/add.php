<?php
require '../session.php';
require '../db_connect.php';
$uid		= $_SESSION['sess_user_id'];
$type 		= ucwords ($_POST['type']);
$groupid 	= ucwords ($_POST['groupid']);
$title		= ucwords ($_POST['title']);
$url		= $_POST['url'];
$favicon	= $_POST['favicon'];
$nsfw		= $_POST['nsfw'];
$home		= $_POST['home'];

if (isset($uid,$type,$groupid,$title,$url,$favicon,$nsfw,$home))	{
	$sql = "INSERT INTO bookmarks (uid,type,groupid,title,url,favicon,nsfw,home) VALUES ('".$uid."','".$type."','".$groupid."','".$title."','".$url."','".$favicon."','".$nsfw."','".$home."')";
	$res = mysqli_query($con,$sql);
	if ($res)  {
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?result=success');		
	}	else  {
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?result=failure');
	} 
}
?>