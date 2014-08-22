<?php
echo '
<form id="login_form" name="login_form" method="post" action="usercheck.php">
	<table id="login_table">
		<tr>
			<td colspan="2">Login Form</td>
		</tr>
		<tr>
			<td>Username:</td>
			<td>
				<input type="text" name="username" id="username" />
			</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td>
				<input type="password" name="password" name="password" id="password" />
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<input type="submit" name="button" id="button" value="Submit" />
			</td>
		</tr>
	</table>
</form>
';