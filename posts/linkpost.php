<?php
header('Location: /bookmarks.php'. '?type='. ucwords ($_POST['type']) . '&purity=' . $_POST['nsfw'])
?>