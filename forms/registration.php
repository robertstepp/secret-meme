<?php
function generateRandomString($length = 50) {
	return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ`~!@#$%^&*_-+=|\:<,>.?/"), 0, $length);
}
$salt = generateRandomString();
echo '
<form name="registration" method="post" action="../posts/userregistration.php" onsubmit="return validateForm();">
	<table id="registration_table">
		<tr>
			<th colspan="2">Registration Form</th>
		</tr>
		<tr>
			<td>Username:</td>
			<td>
				<input type="text" name="username" id="username" autofocus />
			</td>
		</tr>
		<tr>
			<td>Email:</td>
			<td>
				<input type="text" name="email" id="email" />
			</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td>
				<input type="password" name="password1" id="password1" />
			</td>
		</tr>
		<tr>
			<td>Password again:</td>
			<td>
				<input type="password" name="password2" id="password2" />
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<input type="submit" name="button" id="button" value="Submit" />
				<input type="hidden" name="salt" id="salt" value="' . $salt . '" />
				<input type="reset" name="button2" id="button2" value="Oops!" />
			</td>
		</tr>
	</table>
</form>
';
?>