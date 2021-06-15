<?php

include_once(__DIR__ . "/../SERVICE/UserService.php");
session_start();

// UPDATE CONTROLLER

// REGEX (A RENFORCER)
$regText = "#^[a-z0-9 _]{1,20}$#i"; // 20 caractères autorisés max (chiffres, lettres et _ et " ")
$regTextLong = "#^[a-z0-9 _]{1,40}$#i"; // 40 caractères autorisés max (chiffres, lettres et _ et " ")
$regMail = "#^[a-z]{1,}@{1}[a-z]{1,}\.[a-z]{2,3}$#i";
$regTel = "#^[0-9]{10}$#"; // 10 chiffres seulements
$regCP = "#^[0-9]{5}$#"; // 5 chiffres seulements

$doublonPseudo = false;
$doublonMail = false;
$avatarAlreadyExist = false;

$name = htmlentities($_POST['name']);
$lastname = htmlentities($_POST['lastname']);
$nickname = htmlentities($_POST['nickname']);
$mail = htmlentities($_POST['mail']);
$adress = htmlentities($_POST["adress"]);
$city = htmlentities($_POST["city"]);
$cp = htmlentities($_POST["cp"]);
$tel = htmlentities($_POST["tel"]);
$movie = htmlentities($_POST["movie"]);
$book = htmlentities($_POST["book"]);
$music = htmlentities($_POST["music"]);
$sport = htmlentities($_POST["sport"]);
$vg = htmlentities($_POST["vg"]);
$bio = htmlentities($_POST["bio"]);
$csrf = $_POST["csrf_token"];

if (isset($_FILES) && !empty($_FILES['avatar']['tmp_name'])){
    $file = $_FILES['avatar']['tmp_name'];
    $avatar = file_get_contents($file);
} else if (empty($_FILES['avatar']['tmp_name']) && $_SESSION['user_avatar'] != NULL) {
    $avatarAlreadyExist = true;
} else {
    $avatar = null;
}
    
  if (isset($_POST)){

    if($_SESSION['csrf_token'] !== $csrf){

      echo "Erreur : CRSF Token Invalide !";
      exit();
   }
 
    
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
                        echo "Erreur : Ce pseudo est déjà pris veuillez en saisir un nouveau. </br>";
                        $doublonPseudo = true;
                      }
                }

                if ($_SESSION['user_mail'] != $mail){
                    if ($value->getMAIL() == $mail){
                        echo "Erreur : Cette adresse mail est déjà prise veuillez en saisir une nouvelle. </br>";
                        $doublonMail = true;
                      }
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

            if (preg_match($regMail, $mail) && preg_match($regTel, $tel) && preg_match($regCP, $cp) && (!$doublonPseudo) && (!$doublonMail)){
                
              $updateUser = new UserService();

                if (!$avatarAlreadyExist){
                                  
                  try {
                    $user = (new User())->setNAME(strtoupper($name))
                                        ->setLASTNAME($lastname)
                                        ->setNICKNAME($nickname)
                                        ->setMAIL($mail)
                                        ->setADRESS($adress)
                                        ->setCITY($city)
                                        ->setCP($cp)
                                        ->setTEL($tel)
                                        ->setMOVIE($movie)
                                        ->setBOOK($book)
                                        ->setMUSIC($music)
                                        ->setSPORT($sport)
                                        ->setVG($vg)
                                        ->setBIO($bio)
                                        ->setID(intval($_SESSION['user_id']));

                    $updateUser->updateUser($user);
                    $updateUser->updateAvatar($avatar, $_SESSION['user_id']);
                    echo "DONE : Vos infos sont mises à jour !";
                    } catch (UserServiceException $error) {
                        $messageError = $error->getMessage();
                        echo $messageError;
                    }

                } else {
                  
                  try {
                    $user = (new User())->setNAME(strtoupper($name))
                                        ->setLASTNAME($lastname)
                                        ->setNICKNAME($nickname)
                                        ->setMAIL($mail)
                                        ->setADRESS($adress)
                                        ->setCITY($city)
                                        ->setCP($cp)
                                        ->setTEL($tel)
                                        ->setMOVIE($movie)
                                        ->setBOOK($book)
                                        ->setMUSIC($music)
                                        ->setSPORT($sport)
                                        ->setVG($vg)
                                        ->setBIO($bio)
                                        ->setID(intval($_SESSION['user_id']));
                                        
                    $updateUser->updateUser($user);
                    echo "DONE : Vos infos sont mises à jour !";
                    } catch (UserServiceException $error) {
                        $messageError = $error->getMessage();
                        echo $messageError;
                    }

                }

            }
          } catch (UserServiceException $error) {
            $messageError = $error->getMessage();
            echo $messageError;
          }
          
      } else {
        echo "Erreur : Veuillez saisir et remplir les informations manquantes.";
      }
  }
?>