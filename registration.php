<?php

echo '
<form name="registration" method="post" action="userregistration.php" onsubmit="return validateForm();">
	<table id="registration_table">
		<tr>
			<th colspan="2">Registration Form</th>
		</tr>
		<tr>
			<td>Username:</td>
			<td>
				<input type="text" name="username" id="username" />
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
				<input type="reset" name="button2" id="button2" value="Oops!" />
			</td>
		</tr>
	</table>
</form>
';
?>