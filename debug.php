<?php
if($ts === 'yes'){
	if(isset($_SESSION['sess_username'])){
		echo $_SESSION['sess_username'] . '<br />' . $_SESSION['sess_user_id'];
	}
}
?>