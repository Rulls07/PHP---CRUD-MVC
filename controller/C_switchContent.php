<?php
$loc = filter_input(INPUT_GET, "loc"); 
// ? filter_input(INPUT_GET, "loc") : 'home';
$text = '';
$c_user = new C_User();
switch ($loc) {

    case  'home':

        $text = ("../public/index.php");

        break;

    case  'update':

        $text = ("../vue/V_update.php");

        break;
    case  'edit':

        $text = ("../vue/V_edit.php");

        break;
    case  'delete':

        $text = ("../vue/V_delete.php");

        break;
    case  'store':

        $text = ("content/store_content.php");

        break;
    default:
        $text = ("../vue/V_error.php");
        break;
};