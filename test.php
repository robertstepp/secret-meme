<?php
require 'db_connect.php';
$query = "SELECT * FROM bookmarks;";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))	{
	echo $row['uid'] . " -- " . $row['title'] . " -- " . $row['url'] . "<br />";
}
echo $_SERVER['HTTPS'];
if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == ""){
    $redirect = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    header("Location: $redirect");
	echo $redirect;
}
?>