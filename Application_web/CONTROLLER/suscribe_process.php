<?php

include_once(__DIR__ . "/../SERVICE/UserService.php");

$doublonPseudo = false;
$doublonMail = false;
  
    // REGEX (A RENFORCER)
  $regText = "#^[a-z0-9 _]{1,20}$#i"; // 20 caractères autorisés max (chiffres, lettres et _ et " ")
  $regTextLong = "#^[a-z0-9 _]{1,40}$#i"; // 40 caractères autorisés max (chiffres, lettres et _ et " ")
  $regMail = "#^[a-z]{1,}@{1}[a-z]{1,}\.[a-z]{2,3}$#i";
  $regTel = "#^[0-9]{10}$#"; // 10 chiffres seulements
  $regCP = "#^[0-9]{5}$#"; // 5 chiffres seulements
  
  $name = $_POST['nominscription'];
  $lastname = $_POST['prenominscription'];
  $nickname = $_POST['pseudoinscription'];
  $mail = $_POST['mailinscription'];
  $password = $_POST["mdpinscription"];
  $repassword = $_POST["mdp2inscription"];
  $adress = $_POST["adresseinscription"];
  $city = $_POST["villeinscription"];
  $cp = $_POST["cpinscription"];
  $tel = $_POST["telinscription"];
  $movie = $_POST["filminscription"];
  $book = $_POST["livreinscription"];
  $music = $_POST["musiqueinscription"];
  $sport = $_POST["sportinscription"];
  $vg = $_POST["jvinscription"];
  $bio = null;
  $avatar = null;

  $suscribeUser = new UserService();
    
  if (isset($_POST)){
  
      if(isset($name) && !empty($name) 
      && isset($lastname) && !empty($lastname) 
      && isset($nickname) && !empty($nickname)
      && isset($mail) && !empty($mail)
      && isset($password) && !empty($password)
      && isset($repassword) && !empty($repassword)){
  
          try{
            $doublonUser = (new UserService())->ifAlreadyExist();
  
            foreach ($doublonUser as $value){
              if ($value->getNICKNAME() == $nickname){
                echo "Erreur : Ce pseudo est déjà pris veuillez en saisir un nouveau. </br>";
                $doublonPseudo = true;
              }
              if ($value->getMAIL() == $mail){
                echo "Erreur : Cette adresse mail est déjà prise veuillez en saisir une nouvelle. </br>";
                $doublonMail = true;
              }
            }
  
            if (!preg_match($regMail, $mail)){
              echo "Erreur : Veuillez saisir une adresse mail valide. </br>";
            }

            if (!preg_match($regTel, $tel)){
              echo "Erreur : Veuillez saisir un numéro de téléphone valide. </br>";
            }

            if (!preg_match($regCP, $cp)){
              echo "Erreur : Veuillez saisir un numéro d'adresse postale valide. </br>";
            }

            if ($password != $repassword){
              echo "Erreur : Votre mot de passe est différent, veuillez saisir un mot de passe identique. </br>";
            }

            if (preg_match($regMail, $mail) && preg_match($regTel, $tel) && preg_match($regCP, $cp) && ($password === $repassword) && (!$doublonPseudo) && (!$doublonMail)){

              try {
                $suscribeUser->register($name, $lastname, $nickname, $mail, $password, $adress, $city, $cp, $tel, $movie, $book, $music, $sport, $vg, $bio, $avatar);
                echo "DONE : Vous pouvez dès à présent vous connecter !";
                } catch (UserServiceException $error) {
                    $messageError = $error->getMessage();
                    echo $messageError;
                }

            }
          } catch (UserServiceException $error) {
            $messageError = $error->getMessage();
            echo $messageError;

          }
          
      } else {
        echo "Erreur : Veuillez saisir et remplir les informations manquantes. </br>";
      }
  }

?>