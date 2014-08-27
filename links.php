<?php
echo '
<form id="link_post" name="link_post" method="post" action="linkpost.php">
<table id="links">
	<tr>
		<th colspan="2">Link to other pages</th>
	</tr>
	<tr>
		<td>Work Bookmarks</td>
		<td><input type="radio" value="Work" name="type" /></td>
	</tr>
	<tr>
		<td>Personal Bookmarks</td>
		<td><input type="radio" value="Personal" name="type" /></td>
	</tr>
	<tr>
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