<?php 
include('../controller/C_User.php');
$c_user = new C_User();
  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) { //on initialise nos messages d'erreurs; 
      $nameError = '';
      $firstnameError = '';
      $ageError = '';
      $telError = '';
      $emailError = '';
      $paysError = '';
      $commentError = '';
      $metierError = '';
      $urlError = ''; // on recupère nos valeurs 
      $name = htmlentities(trim($_POST['name']));
      $firstname = htmlentities(trim($_POST['firstname']));
      $age = htmlentities(trim($_POST['age']));
      $tel = htmlentities(trim($_POST['tel']));
      $email = htmlentities(trim($_POST['email']));
      $pays = htmlentities(trim($_POST['pays']));
      $comment = htmlentities(trim($_POST['comment']));
      $metier = htmlentities(trim($_POST['metier']));
      $url = htmlentities(trim($_POST['url'])); // on vérifie nos champs 
      $valid = true;
      //-------------------------------------  Input Name
      if (empty($name)) {
          $nameError = 'Please enter Name';
          $valid = false;
      } else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
          $nameError = "Only letters and white space allowed";
      }
      //-------------------------------------  Input Firts Name
      if (empty($firstname)) {
          $firstnameError = 'Please enter firstname';
          $valid = false;
      } else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
          $nameError = "Only letters and white space allowed";
      }
      //-------------------------------------  Input Email
      if (empty($email)) {
          $emailError = 'Please enter Email Address';
          $valid = false;
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailError = 'Please enter a valid Email Address';
          $valid = false;
      }
      //-------------------------------------  Input Age                
      if (empty($age)) {
          $ageError = 'Please enter your age';
          $valid = false;
      }
      //-------------------------------------  Input Tel                   
      if (empty($tel)) {
          $telError = 'Please enter phone';
          $valid = false;
      } else if (!preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $tel)) {
          $telError = 'Please enter a valid phone';
          $valid = false;
      }
      //-------------------------------------  Input Pays                 
      if (!isset($pays)) {
          $paysError = 'Please select a country';
          $valid = false;
      }
      //-------------------------------------  Input Comment   
      if (empty($comment)) {
          $commentError = 'Please enter a description';
          $valid = false;
      }
      //-------------------------------------  Input Metier  
      if (empty($metier)) {
          $metierError = 'Please select a job';
          $valid = false;
      }
      if (empty($url)) {
          $urlError = 'Please enter website url';
          $valid = false;
      } else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
          $urlError = 'Enter a valid url';
          $valid = false;
      } // si les données sont présentes et bonnes, on se connecte à la base 
    //   var_dump($valid);
        if ($valid) { 
            $c_user->createUser($name,$firstname,$age,$tel,$email,$pays,$comment,$metier,$url);
            header("Location: http://localhost/PHP/cda/CRUD-php/public/index.php");

        }
  }
            
?>
<!DOCTYPE html>
<html>

    <?php include('../content/content_head.php'); ?>

<body>
    <?php include('../content/content_add.php'); ?>
    
</body>

</html>
     
     
