<?php

require_once(__DIR__.'/VIEW/view_header_bootstrap.php'); 
require_once(__DIR__.'/VIEW/view_footer.php'); 
require_once(__DIR__.'/VIEW/view_connexion.php');
require_once(__DIR__.'/SERVICE/UserService.php');

// HEADER
callHeader("Connexion / Inscription", "css/connexion.css");
callMainTitle("Connexion");

// CONTROLLER CONNEXION

$messageConnexion = [
    "messageErrCo" => "",
    "messageSuccessCo" => "",
    "messageNoMail" => "",
    "messageErrTech" => ""];
  
  
  @$mailCo = $_REQUEST['mailco'];
  @$passwordCo = $_REQUEST['passwordco'];
  @$validerCo = $_REQUEST["validerconnexion"];
  
  if (isset($validerCo)){
  
      if(isset($mailCo) && !empty($mailCo) 
      && isset($passwordCo) && !empty($passwordCo) ){
        
        try {
          $setConnexion = (new UserService())->login($mailCo);
        } catch (UserServiceException $error) {
          $messageError = $error->getMessage();
          $error = "alert-error";
          header("Location:connexion.php?messageError=$messageError&error=$error");
        }
  
          if ($setConnexion){
  
            $checkMdp = $setConnexion->getPASSWORD();
            $userID = $setConnexion->getID();
            $userName = $setConnexion->getNAME();
            $userLastname = $setConnexion->getLASTNAME();
            $userNickname = $setConnexion->getNICKNAME();
            $userMail = $setConnexion->getMAIL();
            $userAdress = $setConnexion->getADRESS();
            $userCity = $setConnexion->getCITY();
            $userCP = $setConnexion->getCP();
            $userTel = $setConnexion->getTEL();
            $userMovie = $setConnexion->getMOVIE();
            $userBook = $setConnexion->getBOOK();
            $userSport = $setConnexion->getSPORT();
            $userMusic = $setConnexion->getMUSIC();
            $userVG = $setConnexion->getVG();
            $userBio = $setConnexion->getBIO();
            $userAvatar = $setConnexion->getAVATAR();
            $userRole = $setConnexion->getROLE();
            
            if ($userAvatar == NULL){
                $userAvatar = "images/default_avatar.jpg";
            } else {
                $userAvatar = "data:image;base64," . base64_encode($setConnexion->getAVATAR());
            }
    
              if (password_verify($passwordCo, $checkMdp)){
                $messageConnexion["messageSuccessCo"] = "Bienvenue " . $userNickname. " !";
                $success = "alert-success";
                $_SESSION['user_id'] = $userID;
                $_SESSION['user_name'] = $userName;
                $_SESSION['user_lastname'] = $userLastname;
                $_SESSION['user_nickname'] = $userNickname;
                $_SESSION['user_mail'] = $userMail;
                $_SESSION['user_adress'] = $userAdress;
                $_SESSION['user_city'] = $userCity;
                $_SESSION['user_cp'] = $userCP;
                $_SESSION['user_tel'] = $userTel;
                $_SESSION['user_movie'] = $userMovie;
                $_SESSION['user_book'] = $userBook;
                $_SESSION['user_sport'] = $userSport;
                $_SESSION['user_music'] = $userMusic;
                $_SESSION['user_vg'] = $userVG;
                $_SESSION['user_bio'] = $userBio;
                $_SESSION['user_avatar'] = $userAvatar;
                $_SESSION['user_role'] = $userRole;
              } else {
                $messageConnexion["messageErrCo"] = "Mot de passe incorrect, veuillez réessayer.";
                $error = "alert-error";
                $goodMail = $userMail;
              }
             
          } else {
            $messageConnexion["messageNoMail"] = "Votre adresse mail n'existe pas, veuillez vous inscrire.";
            $error = "alert-error";
          }
    

  
      }
      
  }

// AFFICHAGE CONNEXION & INSCRIPTION
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

    header("Location:profil.php?id={$_SESSION['user_id']}");

} else {

    callConnexion($messageConnexion, $error, @$goodMail);
    callInscription();
}


// FOOTER
callFooter();
    
?>

<!-- SCRIPT -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/inscription.js"></script>
