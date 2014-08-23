<?php
ob_start();
session_start();
echo $_SESSION['sess_user_id'].$_SESSION['sess_username'];
?>