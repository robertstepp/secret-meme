<?php
require 'db_connect.php';
echo '
<form id="link_post" name="link_post" method="post" action="../posts/linkpost.php">
<table id="links">
	<tr>
		<th colspan="2">Link to other pages</th>
	</tr>';
$types = mysqli_query($con,"SELECT type,uid FROM bookmarks WHERE uid='" . $_SESSION['sess_user_id'] . "' GROUP BY type ASC");
while($type = mysqli_fetch_array($types))	{
	echo '
	<tr>
		<td>' . $type['type'] . ' Bookmarks</td>
		<td><input type="radio" name="type" value="' . $type['type'] . '" /></td>
	</tr>
	';
}
echo '		<tr>
		<td>Include NSFW</td>
			<input type="hidden" value="0" name="nsfw" />
		<td><input type="checkbox" name="nsfw" value="1" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" name="button" id="button" value="Submit" />
			<input type="reset" name="button2" id="button2" value="Oops!" />
		</td>
	</tr>
</table>	
</form>'
?>