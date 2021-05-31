<?php
require_once(__DIR__.'/VIEW/view_header_bootstrap.php'); 
require_once(__DIR__.'/VIEW/view_footer.php'); 
require_once(__DIR__.'/VIEW/view_profil.php');
require_once(__DIR__.'/SERVICE/GoldbookService.php');
require_once(__DIR__.'/SERVICE/UserService.php');

$userMessage = new GoldbookService();
$userGoldbook = $userMessage->userMessage($_SESSION['user_id']);

$userService = new UserService();
$userInfo = $userService->displayUser($_SESSION['user_id']);

if ($userInfo->getAVATAR() == NULL){
    $userInfo->setAVATAR("images/default_avatar.jpg");
} else {
    $userInfo->setAVATAR("data:image;base64," . base64_encode($userInfo->getAVATAR()));
}

// UPDATE INFO

// REGEX (A RENFORCER)
$regMail = "#^[a-z]{1,}@{1}[a-z]{1,}\.com$|fr$#i";
  
@$name = $_REQUEST['name'];
@$lastname = $_REQUEST['lastname'];
@$nickname = $_REQUEST['nickname'];
@$mail = $_REQUEST['mail'];
@$adress = $_REQUEST["adress"];
@$city = $_REQUEST["city"];
@$cp = $_REQUEST["cp"];
@$tel = $_REQUEST["tel"];
@$movie = $_REQUEST["movie"];
@$book = $_REQUEST["book"];
@$music = $_REQUEST["music"];
@$sport = $_REQUEST["sport"];
@$vg = $_REQUEST["vg"];
@$bio = $_REQUEST["bio"];
if ($_REQUEST["avatar"] == "images/default_avatar.jpg"){
    @$avatar = NULL;
} else {
    @$avatar = $_REQUEST["avatar"];
}
@$sendModif = $_REQUEST["sendmodif"];
    
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
              $messageUpdate["messageOk"] = "Vos infos sont mises à jour !";
                header("Location:CONTROLLER/updateUser_process.php?name=$name&lastname=$lastname&nickname=$nickname&mail=$mail&adress=$adress&city=$city&cp=$cp&tel=$tel&movie=$movie&book=$book&music=$music&sport=$sport&vg=$vg&bio=$bio&avatar=$avatar");
            }
          } catch (UserServiceException $error) {
            $messageError = $error->getMessage();
            header("Location:profil.php?messageError=$messageError");
          }
          
      } else {
        $messageUpdate["messageErrorUpdate"] = "Veuillez saisir et remplir les informations manquantes";
      }
  }

if (isset($_GET['modifprofil']) && isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
    
    // HEADER
    callHeader($_SESSION['user_nickname'], "css/profil.css"); 
    callMainTitle($_SESSION['user_nickname']);

    // FORMULAIRE MODIF PROFIL
    if ($userInfo->getBIO() == "Dites nous en plus à votre sujet. Qui êtes vous ? Quels sont vos centres d'intêrets ? Comment avez-vous franchi les portes du Pocket Museum ?"){
        $userInfo->setBIO(NULL);
    }
    if ($userInfo->getVG() == "Plutôt Age of Empire ou Gears of Wars ?"){
        $userInfo->setVG(NULL);
    }
    if ($userInfo->getMUSIC() == "Une souris verte, qui courait dans l'herbe, je l'attrape par la queue ..."){
        $userInfo->setMUSIC(NULL);
    }
    if ($userInfo->getBOOK() == "Sois aussi érudit que Père Fourasse, et dis nous quel est ton livre de chevet."){
        $userInfo->setBOOK(NULL);
    }
    if ($userInfo->getSPORT() == "Le blitzball ou le quidditch sont aussi des sports, si si ..."){
        $userInfo->setSPORT(NULL);
    }
    if ($userInfo->getMOVIE() == "Quoi tu n'as pas vu Jurassic Park ? Si c'est le cas, tu devrais nous le dire."){
        $userInfo->setMOVIE(NULL);
    }

    // AFFICHAGE PROFIL MODIF
    callProfilModif($userInfo->getNICKNAME(), $userInfo->getNAME(), $userInfo->getLASTNAME(), $userInfo->getMAIL(),
                    $userInfo->getADRESS(), $userInfo->getCITY(), $userInfo->getCP(), $userInfo->getTEL(), $userInfo->getBIO(),
                    $userInfo->getAVATAR(), $userInfo->getMOVIE(), $userInfo->getBOOK(), $userInfo->getMUSIC(), $userInfo->getSPORT(), $userInfo->getVG());

} else if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) || isset($_REQUEST['backprofil'])){
    
    // HEADER
    callHeader($_SESSION['user_nickname'], "css/profil.css"); 
    callMainTitle($_SESSION['user_nickname']);

    // CONTROLLER PROFIL
    if ($userInfo->getBIO() == NULL){
        $userInfo->setBIO("Dites nous en plus à votre sujet. Qui êtes vous ? Quels sont vos centres d'intêrets ? Comment avez-vous franchi les portes du Pocket Museum ?");
    }
    if ($userInfo->getVG() == NULL){
        $userInfo->setVG("Plutôt Age of Empire ou Gears of Wars ?");
    }
    if ($userInfo->getMUSIC() == NULL){
        $userInfo->setMUSIC("Une souris verte, qui courait dans l'herbe, je l'attrape par la queue ...");
    }
    if ($userInfo->getBOOK() == NULL){
        $userInfo->setBOOK("Sois aussi érudit que Père Fourasse, et dis nous quel est ton livre de chevet.");
    }
    if ($userInfo->getSPORT() == NULL){
        $userInfo->setSPORT("Le blitzball ou le quidditch sont aussi des sports, si si ...");
    }
    if ($userInfo->getMOVIE() == NULL){
        $userInfo->setMOVIE("Quoi tu n'as pas vu Jurassic Park ? Si c'est le cas, tu devrais nous le dire.");
    }

    // AFFICHAGE PROFIL
    callProfil($userGoldbook, $userInfo->getNICKNAME(), $userInfo->getNAME(), $userInfo->getLASTNAME(), $userInfo->getMAIL(),
               $userInfo->getADRESS(), $userInfo->getCITY(), $userInfo->getCP(), $userInfo->getTEL(), $userInfo->getBIO(),
               $userInfo->getAVATAR(), $userInfo->getMOVIE(), $userInfo->getBOOK(), $userInfo->getMUSIC(), $userInfo->getSPORT(), $userInfo->getVG());

} else {

    $wrongWay = "Veuillez vous connecter pour accéder à cette page.";
    header("Location:connexion.php?wrongway=$wrongWay");

}
//FOOTER
callFooter(); 
     
?>

<!-- SCRIPT -->
<script src="js/profil.js"></script>
