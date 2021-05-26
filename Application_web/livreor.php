<?php

require_once(__DIR__.'/VIEW/view_header_bootstrap.php'); 
require_once(__DIR__.'/VIEW/view_footer.php'); 
require_once(__DIR__.'/VIEW/view_goldbook.php');

// HEADER
callHeader("Livre d'or", "css/livreor.css");
callMainTitle("Livre d'or");

// CONTROLLER FORMULAIRE LIVRE D'OR
// $_SESSION['user_id'] = 4;
// $_SESSION['user_name'] = 'Marlon';
// $_SESSION['user_lastname'] = "Brando";

$messageError = [
  "messageError" => ""];

if (isset($_REQUEST['5stars'])){
  @$stars = 5;
} else if (isset($_REQUEST['4stars'])){
  @$stars = 4;
} else if (isset($_REQUEST['3stars'])){
  @$stars = 3;
} else if (isset($_REQUEST['2stars'])){
  @$stars = 2;
} else if (isset($_REQUEST['1stars'])){
  @$stars = 1;
}
@$avis = $_REQUEST['avis'];
@$valider= $_REQUEST["valider"];

if (isset($valider)){

  if(isset($avis) && !empty($avis)  
  && isset($stars) && !empty($stars) ){

    header("Location:CONTROLLER/goldbook_process.php?avis=$avis&stars=$stars"); // CREER process écriture sur DB

  } else {
      $messageError["messageError"] = "Veuillez saisir et remplir les informations manquantes";
  }
}

// AFFICHAGE FORMULAIRE LIVRE D'OR
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

callGoldBookConnected($_SESSION['user_name'], $_SESSION['user_lastname'], $avis, $messageError);

} else {

callGoldBookUnconnected();

}

// FOOTER 
callFooter(); 

?>
      
<!-- SCRIPT -->

  <script type="text/javascript" src="js/script.js"></script>