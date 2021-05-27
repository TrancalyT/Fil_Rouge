<?php

require_once(__DIR__.'/VIEW/view_header_bootstrap.php'); 
require_once(__DIR__.'/VIEW/view_footer.php'); 
require_once(__DIR__.'/VIEW/view_connexion.php');
require_once(__DIR__.'/SERVICE/UserService.php');

// HEADER
callHeader("Connexion / Inscription", "css/connexion.css");
callMainTitle("Connexion");

// CONTROLLER INSCRIPTION
$messageInscription = [
    "messageErrPseudoInscr" => "",
    "messageErrMailInscr" => "",
    "messageErrMDPInscr" => "",
    "messageErrorInscri" => "",
    "messageInscriOk" => "",
    "messageErrDoublonPseudo" => "",
    "messageErrDoublonMail" => "",
    "doublonPseudo" => false,
    "doublonMail" => false];
  
    // REGEX (A RENFORCER)
  $regPseudoInscr = "#[a-z]{1,20}#i";
  $regMailInscr = "#^[a-z]{1,}@{1}[a-z]{1,}\.com$|fr$#i";
  
  @$name = $_REQUEST['nominscription'];
  @$lastname = $_REQUEST['prenominscription'];
  @$nickname = $_REQUEST['pseudoinscription'];
  @$mail = $_REQUEST['mailinscription'];
  @$password = $_REQUEST["mdpinscription"];
  @$repassword = $_REQUEST["mdp2inscription"];
  @$adress = $_REQUEST["adresseinscription"];
  @$city = $_REQUEST["villeinscription"];
  @$cp = $_REQUEST["cpinscription"];
  @$tel = $_REQUEST["telinscription"];
  @$movie = $_REQUEST["filminscription"];
  @$book = $_REQUEST["livreinscription"];
  @$music = $_REQUEST["musiqueinscription"];
  @$sport = $_REQUEST["sportinscription"];
  @$vg = $_REQUEST["jvinscription"];
  @$validerInscri = $_REQUEST["validerinscription"];
    
  if (isset($validerInscri)){
  
      if(isset($name) && !empty($name) 
      && isset($lastname) && !empty($lastname) 
      && isset($nickname) && !empty($nickname)
      && isset($mail) && !empty($mail)
      && isset($password) && !empty($password)
      && isset($repassword) && !empty($repassword)){
  
          try{
            $doublonUser = (new UserService())->ifAlreadyExist();
  
            foreach ($doublonUser as $value){
              if ($value->getNAME() == $nickname){
                $messageInscription["messageErrDoublonPseudo"] = "Ce pseudo est déjà pris veuillez en saisir un nouveau";
                $messageInscription["doublonPseudo"] = true;
              }
              if ($value->getMAIL() == $mail){
                $messageInscription["messageErrDoublonMail"] = "Cette adresse mail est déjà prise veuillez en saisir une nouvelle";
                $messageInscription["doublonMail"] = true;
              }
            }
  
            if (!preg_match($regMailInscr, $mail)){
              $messageInscription["messageErrMailInscr"] = "Veuillez saisir une adresse mail valide";
            }
            if ($password != $repassword){
              $messageInscription["messageErrMDPInscr"] = "Votre mot de passe est différent, veuillez saisir un mot de passe identique";
            }
            if (preg_match($regMailInscr, $mail) && ($password === $repassword) && (!$messageInscription["doublonPseudo"]) && (!$messageInscription["doublonMail"])){
              $messageInscription["messageInscriOk"] = "Votre inscription est bien enregistrée " .$nickname. ", vous pouvez dès à présent vous connecter :)";
                header("Location:CONTROLLER/suscribe_process.php?name=$name&lastname=$lastname&nickname=$nickname&mail=$mail&password=$password&adress=$adress&city=$city&cp=$cp&tel=$tel&movie=$movie&book=$book&music=$music&sport=$sport&vg=$vg");
            }
          } catch (UserServiceException $error) {
            $messageError = $error->getMessage();
            header("Location:connexion.php?messageError=$messageError");
          }
          
      } else {
        $messageInscription["messageErrorInscri"] = "Veuillez saisir et remplir les informations manquantes";
      }
  }

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
    
              if (password_verify($passwordCo, $checkMdp)){
                $messageConnexion["messageSuccessCo"] = "Bienvenue " . $userNickname. " !";
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
                header("Refresh: 3; URL=accueil.php");
              } else {
                $messageConnexion["messageErrCo"] = "Mot de passe incorrect, veuillez réessayer";
                $goodMail = $userMail;
              }
             
          } else {
            $messageConnexion["messageNoMail"] = "Votre adresse mail n'existe pas, veuillez vous inscrire";
          }
    
        } catch (UserServiceException $error) {
          $messageError = $error->getMessage();
          header("Location:connexion.php?messageError=$messageError");
        }
  
      }
      
  }

// AFFICHAGE CONNEXION & INSCRIPTION
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

    header("Location:profil.php");

} else {

    callConnexion($messageConnexion, @$messageError);
    callInscription($messageInscription);
}


// FOOTER
callFooter();
    
?>

<!-- SCRIPT -->

<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
