<?php

require_once(__DIR__.'/VIEW/view_header_bootstrap.php'); 
require_once(__DIR__.'/VIEW/view_footer.php'); 
require_once(__DIR__.'/VIEW/view_goldbook.php');

// HEADER
callHeader("Livre d'or", "css/livreor.css");
callMainTitle("Livre d'or");

// FORMULAIRE LIVRE D'OR
$_SESSION['user_id'] = 4;
$_SESSION['user_name'] = 'Marlon';

$messageError = [
  "messageErrSignature" => "",
  "messageError" => ""];

$regSignature = "#[a-z]{1,20}#i"; // REGEX à préciser

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
@$signature = $_REQUEST['signature'];
@$valider= $_REQUEST["valider"];

if (isset($valider)){

  if(isset($avis) && !empty($avis) 
  && isset($signature) && !empty($signature) 
  && isset($stars) && !empty($stars) ){

      if (!preg_match($regSignature, $signature)){
          $messageError["messageErrSignature"] = "Signature incorrect";
      }
      if (preg_match($regSignature, $signature)){
          header("Location:dbGoldbook.php?avis=$avis&signature=$signature&stars=$stars"); // CREER process écriture sur DB
      }

  } else {
      $messageError["messageError"] = "Veuillez saisir et remplir les informations manquantes";
  }
}

if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

callGoldBookConnected($_SESSION['user_name'], $avis, $messageError);

} else {

callGoldBookUnconnected();

}

// FOOTER 
callFooter(); 

?>
      
<!-- SCRIPT -->
<script type="text/javascript" src="js/script.js"></script>