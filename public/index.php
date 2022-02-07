<?php 
include('../controller/C_User.php');
$loc = filter_input(INPUT_GET, "loc") ? filter_input(INPUT_GET, "loc") : 'home';
$text = '';
$c_user = new C_User();
switch ($loc) {
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
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Crud en php</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="assets/responsive.css" rel="stylesheet">
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />


</head>
<body>
    <div class="container"><br/>
        <div class="row"><br/>
            <h2>CRUD PHP</h2>
        </div>
        <div class="row">
            <a href="V_add.php" class="btn btn-success">Ajouter un user</a><br/>
            <div class="table-responsive">
                <br/>
                <table class="table table-hover table-bordered">
                    <br />
                    <thead>
                        <th>Name</th>
                        <th>Firstname</th>
                        <th>Age</th>
                        <th>Tel</th>
                        <th>Pays</th>
                        <th>Email</th>
                        <th>Comment</th>
                        <th>metier</th>
                        <th>Url</th>
                        <th>Edition</th>     
                    </thead>
                        <br/>
                    <tbody>
                    <?php
                    $resultado =$c_user->getAllUser();
                    foreach ($resultado as $key => $value) { //on cree les lignes du tableau avec chaque valeur retournée
                            echo '<tr>';
                            echo '<td>' . $value->getName() . '</td>';
                            echo '<td>' . $value->getFirstname() . '</td>';
                            echo '<td>' . $value->getAge() . '</td>';
                            echo '<td>' . $value->getTel() . '</td>';
                            echo '<td>' . $value->getEmail() . '</td>';
                            echo '<td>' . $value->getPays() . '</td>';
                            echo '<td>' . $value->getComment() . '</td>';
                            echo '<td>' . $value->getMetier() . '</td>';
                            echo '<td>' . $value->getUrl() . '</td>';
                            echo '<td>';
                            echo '<a class="btn btn-warning" href="V_edit.php?id=' . $value->getId() . '">Read</a>'; // un autre td pour le bouton d'edition
                                echo '</td>';
                            echo '<td>';
                                echo '<a class="btn btn-success" href="V_update.php?id=' . $value->getId() . '">Update</a>'; // un autre td pour le bouton d'update
                            echo '</td>';
                            echo '<td>';
                                echo '<a class="btn btn-danger" href="V_delete.php?id=' . $value->getId() . ' ">Delete</a>'; // un autre td pour le bouton de suppression
                            echo '</td>';
                            echo '</tr>';
                            }
                        ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
<script src="/CRUD-php/assets/js/bootstrap.min.js"></script>
</body>

</html>