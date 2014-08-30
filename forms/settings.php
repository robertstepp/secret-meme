<?php
/*Use GET automatically to pull settings
Use POST with submit to set settings*/
$uid = $_SESSION['sess_user_id'];
$query = "SELECT background,fontsize,fontcolor FROM settings WHERE uid=$uid";
$psettings = mysqli_query($con,$query);
$csettings = mysqli_fetch_array($psettings);
echo '
<form id="settings" name="settings" method="post" action="../posts/settings.php">
	<table id="settings_table">
		<tr>
			<th colspan="2">Settings Form</th>
		</tr>
		<tr>
			<td>Background Color:</td>
			<td><input type="color" name="backgroundcolor" /></td>
		</tr>
		<tr>
			<td>Wallpaper:</td>
			<td><input type="text" name="background" value="' . $csettings['background'] . '" /><a href="upload_page.php"><input type="button" name="uploadbutton" id="uploadbutton" value="Upload" /></a></td>
			
		</tr>
		<tr>
			<td>Font Color:</td>
			<td><input type="color" name="fontcolor" value="#' . $csettings['fontcolor'] . '" /></td>
		</tr>
		<tr>
			<td>Font Size:</td>
			<td><input type="number" name="fontsize" min="1" max="5" value="' . $csettings['fontsize'] .'" /> em</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<input type="submit" name="button" id="button" value="Submit" />
				<input type="reset" name="button2" id="button2" value="Oops!" />
			</td>
		</tr>
	</table>
</form>
';
?>
