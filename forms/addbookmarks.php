<?php
echo '
<form id="add_bookmarks" name="add_bookmarks" method="post" action="../posts/add.php">
	<table id="add_table">
		<tr>
			<th colspan="2">Add Bookmarks</th>
		</tr>
		<tr>
			<td>Type:</td>
			<td>
				<select name="type" id="type">
					';
				$type = mysqli_query($con,"SELECT type FROM bookmarks WHERE uid=" . $_SESSION['sess_user_id'] . " GROUP BY type");
				while($types = mysqli_fetch_array($type))	{
					echo "<option value='".$types['type']."'>" . $types['type'] . "</option>
					";
				}
			echo '
				</select>
				</td>
		</tr>
		<tr>
			<td>Add Type if not listed:</td>
			<td><input type="text" name="type" id="type" /></td>
		<tr>
			<td>Group:</td>
			<td><input type="text" name="groupid" id="groupid" /></td>
		</tr>
		<tr>
			<td>Title:</td>
			<td><input type="text" name="title" id="title" /></td>
		</tr>
		<tr>
			<td>URL:</td>
			<td><input type="url" name="url" id="url" /></td>
		</tr>
		<tr>
			<td>Favicon(if known):</td>
			<td><input type="url" name="favicon" id="favicon" /></td>
		</tr>
		<tr>
			<td>NSFW:</td>
			<input type="hidden" value="0" name="nsfw" />
			<td><input type="checkbox" name="nsfw" value="1" /></td>
		</tr>
		<tr>
			<td>Home Screen:</td>
			<input type="hidden" value="0" name="home" />
			<td><input type="checkbox" name="home" value="1" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<input type="submit" name="button" id="button" value="Submit" />
				<input type="reset" name="button2" id="button2" value="Oops!" />
			</td>
	</table>
</form>';