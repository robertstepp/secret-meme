<?php
require 'session.php';
require 'db_connect.php';
$uid		= $_SESSION['sess_user_id'];
$type 		= $_POST['type'];
$groupid 	= $_POST['groupid'];
$title		= $_POST['title'];
$url		= $_POST['url'];
$favicon	= $_POST['favicon'];
$nsfw		= $_POST['nsfw'];
$home		= $_POST['home'];

echo $uid . $type . $groupid . $title . $url . $favicon . $nsfw . $home;
if (isset($uid,$type,$groupid,$title,$url,$favicon,$nsfw,$home))	{
	$sql = "INSERT INTO bookmarks (uid,type,groupid,title,url,favicon,nsfw,home) VALUES ('".$uid."','".$type."','".$groupid."','".$title."','".$url."','".$favicon."','".$nsfw."','".$home."')";
	$res = mysqli_query($con,$sql);
	if ($res)  {
		echo $title . ' added.';
		sleep(10);
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?result=success');		
	}	else  {
		echo $title . ' failed to add.';
		sleep(10);
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?result=failure');
	} 
}
?>