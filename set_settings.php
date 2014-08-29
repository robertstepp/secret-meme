<?php
// Set Session data for per user settings by pulling from settings database //
if (isset($_SESSION['sess_user_id']))  {
$uid = $_SESSION['sess_user_id'];
$query = "SELECT background,fontsize,fontcolor FROM settings WHERE uid=$uid";
$psettings = mysqli_query($con,$query);
$csettings = mysqli_fetch_array($psettings);
$_SESSION['userbackground'] = $csettings['background'];
$_SESSION['userfontsize'] 	= $csettings['fontsize'];
$_SESSION['userfontcolor'] 	= $csettings['fontcolor'];
}
?>