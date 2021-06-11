<?php
require_once(__DIR__.'/VIEW/view_header_bootstrap.php'); 
require_once(__DIR__.'/VIEW/view_footer.php'); 
require_once(__DIR__.'/VIEW/view_profil.php');
require_once(__DIR__.'/SERVICE/GoldbookService.php');
require_once(__DIR__.'/SERVICE/UserService.php');

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

    // RECUPERATION DES INFOS DU GOLDBOOK
    $userMessage = new GoldbookService();
    $userGoldbook = $userMessage->userRated($_SESSION['user_id']);

    if ($userGoldbook != null){
        foreach ($userGoldbook as $value) {

            $messageGb = $value->getTEXT();
            $rateGb= $value->getSTARS();
        
        
            if ($rateGb == 1){
            $rateGb = "★";
            } else if ($rateGb == 2){
            $rateGb = "★★";
            } else if ($rateGb == 3){
            $rateGb = "★★★";
            } else if ($rateGb == 4){
            $rateGb = "★★★★";
            } else if ($rateGb == 5){
            $grateGb = "★★★★★";
            }
        }
    } else {
        $messageGb = null;
        $rateGb = null;
    }

    $userService = new UserService();
    $userInfo = $userService->displayUser($_SESSION['user_id']);

    // AFFICHAGE AVATAR SI PAS D'AVATAR
    if ($userInfo->getAVATAR() == NULL){
        $userInfo->setAVATAR("images/default_avatar.jpg");
    } else {
        $userInfo->setAVATAR("data:image;base64," . base64_encode($userInfo->getAVATAR()));
    }

}


// SI MODIF
if (isset($_GET['modifprofil']) && isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
    
    // HEADER
    callHeader($userInfo->getNICKNAME(), "css/profil.css"); 
    callMainTitle($userInfo->getNICKNAME());

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
    callProfilModif($userInfo->getNICKNAME(), $userInfo->getNAME(), $userInfo->getLASTNAME(), $userInfo->getMAIL(), $userInfo->getADRESS(), 
                    $userInfo->getCITY(), $userInfo->getCP(), $userInfo->getTEL(), $userInfo->getBIO(), $userInfo->getAVATAR(), $userInfo->getMOVIE(), 
                    $userInfo->getBOOK(), $userInfo->getMUSIC(), $userInfo->getSPORT(), $userInfo->getVG());

// SI PAS DE MODIF OU RETOUR MODIF
} else if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) || isset($_REQUEST['backprofil'])){
    
    // HEADER
    callHeader($userInfo->getNICKNAME(), "css/profil.css"); 
    callMainTitle($userInfo->getNICKNAME());

    $_SESSION['user_nickname'] = $userInfo->getNICKNAME();
    $_SESSION['user_mail'] = $userInfo->getMAIL();
    $_SESSION['user_avatar'] = $userInfo->getAVATAR();

    $telClear = preg_replace('#(\d{2})#', '$1 ', $userInfo->getTEL());

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
    callProfil($messageGb, $rateGb, $userInfo->getNICKNAME(), $userInfo->getNAME(), $userInfo->getLASTNAME(), $userInfo->getMAIL(),
               $userInfo->getADRESS(), $userInfo->getCITY(), $userInfo->getCP(), $telClear, $userInfo->getBIO(),
               $userInfo->getAVATAR(), $userInfo->getMOVIE(), $userInfo->getBOOK(), $userInfo->getMUSIC(), $userInfo->getSPORT(), $userInfo->getVG());

} else {

    $wrongWay = "Veuillez vous connecter pour accéder à cette page.";
    $error = "alert-error";
    header("Location:connexion.php?wrongway=$wrongWay&error=$error");

}
//FOOTER
callFooter(); 
     
?>

<!-- SCRIPT -->
<script src="js/profil.js"></script>
