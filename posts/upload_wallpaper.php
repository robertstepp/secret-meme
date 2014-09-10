<?php
require '../session.php'; // Check if Session is set //
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$_FILES["file"]["name"] = $_SESSION['sess_user_id'] . "-" . $_FILES["file"]["name"];


if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 562000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
   if (file_exists("../upload/" . $_FILES["file"]["name"])) {
	  header('Location: ' . $_SERVER['HTTP_REFERER'] . '?result=failure');
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../upload/" . $_FILES["file"]["name"]);
	   header('Location: /settings_page.php?result=success');
    }
  }
} else {
  echo "Invalid file";
}
?> 