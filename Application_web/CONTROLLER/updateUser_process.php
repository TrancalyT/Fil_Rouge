<?php

include_once(__DIR__ . "/../SERVICE/UserService.php");
session_start();

// UPDATE CONTROLLER

// REGEX (A RENFORCER)
$regMail = "#^[a-z]{1,}@{1}[a-z]{1,}\.com$|fr$#i";

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
$avatar = addslashes(file_get_contents($file));

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
                        $messageUpdate["messageErrDoublonPseudo"] = "Ce pseudo est déjà pris veuillez en saisir un nouveau";
                        $messageUpdate["doublonPseudo"] = true;
                      }
                }

                if ($_SESSION['user_mail'] != $mail){
                    if ($value->getMAIL() == $mail){
                        $messageUpdate["messageErrDoublonMail"] = "Cette adresse mail est déjà prise veuillez en saisir une nouvelle";
                        $messageUpdate["doublonMail"] = true;
                      }
                }
            }
  
            if (!preg_match($regMail, $mail)){
              $messageUpdate["messageErrMail"] = "Veuillez saisir une adresse mail valide";
            }

            if (preg_match($regMail, $mail) && (!$messageUpdate["doublonPseudo"]) && (!$messageUpdate["doublonMail"])){
                $updateUser = new UserService();

                try {
                    $updateUser->updateUser($name, $lastname, $nickname, $mail, $adress, $city, $cp, $tel, $movie, $book, $sport, $music, $vg, $bio, $avatar, $_SESSION['user_id']);
                    $messageUpdate["messageOk"] = "Vos infos sont mises à jour !";
                    header("Location:../profil.php?id={$_SESSION['user_id']}&successUpdate=true&sucess={$messageUpdate['messageOk']}");
                } catch (UserServiceException $error) {
                    $messageError = $error->getMessage();
                    header("Location:../profil.php?id={$_SESSION['user_id']}&messageError=$messageError");
                }
                
              
                
                // header("Location:CONTROLLER/updateUser_process.php?name=$name&lastname=$lastname&nickname=$nickname&mail=$mail&adress=$adress&city=$city&cp=$cp&tel=$tel&movie=$movie&book=$book&music=$music&sport=$sport&vg=$vg&bio=$bio&avatar=$avatar");
            }
          } catch (UserServiceException $error) {
            $messageError = $error->getMessage();
            header("../profil.php?id={$_SESSION['user_id']}&messageError=$messageError");
          }
          
      } else {
        $messageUpdate["messageErrorUpdate"] = "Veuillez saisir et remplir les informations manquantes";
      }
  }

