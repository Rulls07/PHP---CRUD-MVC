<?php
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$oneUser = $c_user->getUserById($id);
?>
<?php include('../content/content_head.php'); ?>
<?php include('../content/content_read.php'); ?>
