<?php
/*Use GET automatically to pull settings
Use POST with submit to set settings*/
$uid = $_SESSION['sess_user_id'];
$query = "SELECT background,fontsize,fontcolor FROM settings WHERE uid=$uid";
$psettings = mysqli_query($con,$query);
$csettings = mysqli_fetch_array($psettings);
echo $csettings['background'] . " " . $csettings['fontsize'] . " " . $csettings['fontcolor'];
?>
