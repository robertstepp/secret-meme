<?php
if (isset($_GET['result']))  {
	$result = $_GET['result'];
	if ($result == "failed")  {
	echo '<h1>Failed to request account.</h1>';
}
}

echo '
<form name="request_account" method="post" action="../posts/request.php" onsubmit="return validateRequestForm();">
	<input type="hidden" name="subject" value="Request Account" />
	<table id="requestaccount">		
		<tr>
			<th colspan="2">Request Account Form</th>
		</tr>
		<tr>
			<td>Requesters Email:</td>
			<td><input type="text" name="email" id="email" /></td>
		</tr>
		<tr>
			<td>Reason (include requested username):</td>
			<td><input type="textarea" rows="4" cols="50" name="message" id="message" /></td>
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
'
?>