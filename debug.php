<?php
if($debug === 'y'){
	if(isset($_SESSION['sess_username'])){
		echo $_SESSION['sess_username'] . '<br />' . $_SESSION['sess_user_id'] . '<br />' . $_SESSION['start'] . '<br />' . $_SESSION['expire'] . '<br />' . $_SESSION['userbackground'] . '<br />' . $_SESSION['userfontsize'] . '<br />' . $_SESSION['userfontcolor'];
	}
}
?>