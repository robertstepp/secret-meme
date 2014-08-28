<?php
echo '
<form id="login_form" name="login_form" method="post" action="../posts/usercheck.php">
	<table id="login_table">
		<tr>
			<th colspan="2">Login Form</th>
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
				<input type="reset" name="button2" id="button2" value="Oops!" />
			</td>
		</tr>
	</table>
</form>
';