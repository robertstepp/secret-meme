<?php
// Database //
$DB="login";
require 'db_connect.php';
echo '<input type="text" name="username" id="username" /><br /><input type="password" name="password" name="password" id="password" /><br /><input type="submit" name="button" id="button" value="Submit" />';
$query = sprintf("UPDATE mysql.user SET Password = '%s' WHERE User='%s'",mysql_real_escape_string($password),mysql_real_escape_string($username));
$result = mysql_query($query);
if($result){
   echo "change success";
}
?>