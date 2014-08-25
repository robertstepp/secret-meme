<?php
echo '
<form id="add_bookmarks" name="add_bookmarks" method="post" action="add.php">
	<table id="add_table">
		<tr>
			<th colspan="2">Add Bookmarks</th>
		</tr>
		<tr>
			<td>Type:</td>
			<td>
				<select>';
				$type = mysqli_query($con,"SELECT 'type','uid' FROM `bookmarks`.`bookmarks` WHERE uid='" . $_SESSION['sess_user_id'] . "' GROUP BY `type`");
				while($types = mysqli_fetch_array($type))	{
					echo "
					<option value='".$types."'>".$types."</option>
					";
				}
			echo '
				</select>
				</td>
		</tr>
	</table>
</form>';