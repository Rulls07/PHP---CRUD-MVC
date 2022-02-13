<?php 
include_once('../controller/C_User.php');
$loc = filter_input(INPUT_GET, "loc") ? filter_input(INPUT_GET, "loc") : 'home';
$text = '';
$c_user = new C_User();
switch ($loc) {
    case  'add':
        $text = "../vue/V_add.php";
        break;
    case  'update':

        $text = "../vue/V_update.php";
        break;
    case  'edit':

        $text = "../vue/V_read.php";
        break;
    case  'delete':

        $text = "../vue/V_delete.php";
        break;
    default:
        $text = "../content/content_index.php";
        break;
};
?>

<!DOCTYPE html>
<html>

<?php include('../content/content_head.php'); ?>
<body>
<?php include($text); ?>

</body>

</html>