<?php

require_once(__DIR__.'/VIEW/view_header_bootstrap.php'); 
require_once(__DIR__.'/VIEW/view_footer.php'); 
require_once(__DIR__.'/VIEW/view_goldbook.php');
require_once(__DIR__.'/Service/GoldbookService.php');

// HEADER
callHeader("Livre d'or", "css/livreor.css");
callMainTitle("Livre d'or");

// CONTROLLER FORMULAIRE LIVRE D'OR

$messageGb = [
  "messageError" => ""];

@$stars = $_REQUEST['rated'];
@$avis = $_REQUEST['avis'];
@$valider= $_REQUEST["valider"];

if (isset($valider)){

  if(isset($avis) && !empty($avis)  
  && isset($stars) && !empty($stars) ){

    header("Location:CONTROLLER/goldbook_process.php?avis=$avis&stars=$stars");

  } else {
      $messageGb["messageError"] = "Veuillez saisir et remplir les informations manquantes.";
      $error = "alert-error";
  }
}

// AFFICHAGE FORMULAIRE LIVRE D'OR
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

  $alreadyRated = new GoldbookService();

  if ($alreadyRated->alreadyRated($_SESSION['user_id']) != $_SESSION['user_id']){

    callGoldBookConnected($_SESSION['user_name'], $_SESSION['user_lastname'], $avis, $messageGb, $error, @$_GET['error']);

  } else {
    callGoldBookRated(@$_GET['success']);
  }

} else {

callGoldBookUnconnected();

}

// FOOTER 
callFooter(); 

?>
      
<!-- SCRIPT -->
  <script src="js/goldbook.js"></script>
