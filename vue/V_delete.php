<?php 
$id = 0;
// var_dump($_GET['id']);
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
    // var_dump($_REQUEST['id']);
}

if (!empty($_POST)) {
    $id = $_POST['id'];
    // var_dump($_POST['id']);
    $c_user = new C_User();
    $c_user->deleteUserById($id);
    header("Location: http://localhost/PHP/cda/CRUD-php/public/index.php");
    
}
?>
<!DOCTYPE html>
<html>

    <?php include('../content/content_head.php'); ?>

<body>
    <?php include('../content/content_delete.php'); ?>
    
</body>
</html>