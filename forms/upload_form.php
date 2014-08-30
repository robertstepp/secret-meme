<?php
echo '
<form action="../posts/upload_wallpaper.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" /><br>
<input type="submit" name="button" id="button" value="Submit" />
	<input type="reset" name="button2" id="button2" value="Oops!" />
</form>
';
?>