<?php

include_once(__DIR__ . "/../SERVICE/UserService.php");
session_start();

// UPDATE CONTROLLER

// REGEX (A RENFORCER)
$regMail = "#^[a-z]{1,}@{1}[a-z]{1,}\.com$|fr$#i";

$messageUpdate["doublonPseudo"] = false;
$messageUpdate["doublonMail"] = false;
$avatarAlreadyExist = false;

$name = $_REQUEST['name'];
$lastname = $_REQUEST['lastname'];
$nickname = $_REQUEST['nickname'];
$mail = $_REQUEST['mail'];
$adress = $_REQUEST["adress"];
$city = $_REQUEST["city"];
$cp = $_REQUEST["cp"];
$tel = $_REQUEST["tel"];
$movie = $_REQUEST["movie"];
$book = $_REQUEST["book"];
$music = $_REQUEST["music"];
$sport = $_REQUEST["sport"];
$vg = $_REQUEST["vg"];
$bio = $_REQUEST["bio"];

$file = $_FILES['avatar']['tmp_name'];

if (isset($file) && !empty($file)){
  $avatar = file_get_contents($file);
} else if (empty($file) && $_SESSION['user_avatar'] != NULL) {
  $avatarAlreadyExist = true;
} else {
  $avatar = null;
}

$sendModif = $_REQUEST["sendmodif"];
    
  if (isset($sendModif)){
    
      if(isset($name) && !empty($name) 
      && isset($lastname) && !empty($lastname) 
      && isset($nickname) && !empty($nickname)
      && isset($mail) && !empty($mail)
      && isset($adress) && !empty($adress)
      && isset($city) && !empty($city)
      && isset($cp) && !empty($cp)
      && isset($tel) && !empty($tel)){
        
          try{
            $doublonUser = (new UserService())->ifAlreadyExist();
            
            foreach ($doublonUser as $value){
                if ($_SESSION['user_nickname'] != $nickname){
                    if ($value->getNICKNAME() == $nickname){
                        $messageError = "Ce pseudo est déjà pris veuillez en saisir un nouveau.";
                        $messageUpdate["doublonPseudo"] = true;
                        header("Location:../profil.php?id={$_SESSION['user_id']}&messageError=$messageError&error=alert-error");
                      }
                }

                if ($_SESSION['user_mail'] != $mail){
                    if ($value->getMAIL() == $mail){
                        $messageError = "Cette adresse mail est déjà prise veuillez en saisir une nouvelle.";
                        $messageUpdate["doublonMail"] = true;
                        header("Location:../profil.php?id={$_SESSION['user_id']}&messageError=$messageError&error=alert-error");
                      }
                }
            }
  
            if (!preg_match($regMail, $mail)){
              $messageError = "Veuillez saisir une adresse mail valide.";
              header("Location:../profil.php?id={$_SESSION['user_id']}&messageError=$messageError&error=alert-error");
            }

            if (preg_match($regMail, $mail) && (!$messageUpdate["doublonPseudo"]) && (!$messageUpdate["doublonMail"])){
                
              $updateUser = new UserService();

                if (!$avatarAlreadyExist){
                                  
                  try {
                    $updateUser->updateUser($name, $lastname, $nickname, $mail, $adress, $city, $cp, $tel, $movie, $book, $sport, $music, $vg, $bio, $_SESSION['user_id']);
                    $updateUser->updateAvatar($avatar, $_SESSION['user_id']);
                    $messageSuccess = "Vos infos sont mises à jour !";
                    header("Location:../profil.php?id={$_SESSION['user_id']}&messageSuccess=$messageSuccess&success=alert-success");
                    } catch (UserServiceException $error) {
                        $messageError = $error->getMessage();
                        header("Location:../profil.php?id={$_SESSION['user_id']}&messageError=$messageError&error=alert-error");
                    }

                } else {
                  
                  try {
                    $updateUser->updateUser($name, $lastname, $nickname, $mail, $adress, $city, $cp, $tel, $movie, $book, $sport, $music, $vg, $bio, $_SESSION['user_id']);
                    $messageSuccess = "Vos infos sont mises à jour !";
                    header("Location:../profil.php?id={$_SESSION['user_id']}&messageSuccess=$messageSuccess&success=alert-success");
                    } catch (UserServiceException $error) {
                        $messageError = $error->getMessage();
                        header("Location:../profil.php?id={$_SESSION['user_id']}&messageError=$messageError&error=alert-error");
                    }

                }

            }
          } catch (UserServiceException $error) {
            $messageError = $error->getMessage();
            header("../profil.php?id={$_SESSION['user_id']}&messageError=$messageError&error=alert-error");
          }
          
      } else {
        $messageError = "Veuillez saisir et remplir les informations manquantes.";
        header("Location:../profil.php?id={$_SESSION['user_id']}&messageError=$messageError&error=alert-error");
      }
  }

