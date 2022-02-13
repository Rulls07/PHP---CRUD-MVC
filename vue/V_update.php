<?php 
if (!empty($_GET['id'])) {
    $id =(int) $_REQUEST['id'];
}
if (null == $id) {
    header("Location: index.php");
}else {
    var_dump($oneUser);
    $c_user = new C_User();
    $oneUser = $c_user->getUserById($id);
    $name = $oneUser->getName();
    $firstname = $oneUser->getFirstName();
    $age = $oneUser->getAge();
    $tel = $oneUser->getTel();
    $email = $oneUser->getEmail();
    $pays = $oneUser->getPays();
    $comment = $oneUser->getComment();
    $metier = $oneUser->getMetier();
    $url = $oneUser->getUrl();
    
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    // on initialise nos erreurs
    $nameError = null;
    $firstnameError = null;
    $ageError = null;
    $telError = null;
    $emailError = null;
    $paysError = null;
    $commentError = null;
    $metierError = null;
    $urlError = null; // On assigne nos valeurs 
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $age = $_POST['age'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $pays = $_POST['pays'];
    $comment = $_POST['comment'];
    $metier = $_POST['metier'];
    $url = $_POST['url'];
    // On verifie que les champs sont remplis
    $valid = true;
    if (empty($name)) {
        $nameError = 'Please enter Name';
        $valid = false;
    }
    if (empty($firstname)) {
        $firstnameError = 'Please enter firstname';
        $valid = false;
    }
    if (empty($email)) {
        $emailError = 'Please enter Email Address';
        $valid = false;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = 'Please enter a valid Email Address';
        $valid = false;
    }
    if (empty($age)) {
        $ageError = 'Please enter your age';
        $valid = false;
    }
    if (empty($tel)) {
        $telError = 'Please enter phone';
        $valid = false;
    }
    if (!isset($pays)) {
        $paysError = 'Please select a country';
        $valid = false;
    }
    if (empty($comment)) {
        $commentError = 'Please enter a description';
        $valid = false;
    }
    if (!isset($metier)) {
        $metierError = 'Please select a job';
        $valid = false;
    }
    if (empty($url)) {
        $urlError = 'Please enter website url';
        $valid = false;
    } // mise à jour des donnés 
    if ($valid) {
        
        $c_user->updateUser($name,$firstname,$age,$tel,$email,$pays,$comment,$metier,$url);
        header("Location: http://localhost/PHP/cda/CRUD-php/public/index.php");
        // $pdo = Database::connect();
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $sql = "UPDATE user SET name = ?,firstname = ?,age = ?,tel = ?, email = ?, pays = ?, comment = ?, metier = ?, url = ? WHERE id = ?";
        // $q = $pdo->prepare($sql);
        // $q->execute(array($name, $firstname, $age, $tel, $email, $pays, $comment, $metier, $url, $id));
        // Database::disconnect();
        // header("Location: index.php");
    } 
}
?>
<!DOCTYPE html>
<html>

    <?php include('../content/content_head.php'); ?>

<body>
    <?php include('../content/content_update.php'); ?>
    
</body>

</html>