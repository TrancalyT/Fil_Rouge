<?php
require_once(__DIR__.'/VIEW/view_header_bootstrap.php'); 
require_once(__DIR__.'/VIEW/view_footer.php'); 
require_once(__DIR__.'/VIEW/view_profil.php');



if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

// HEADER
callHeader($_SESSION['user_nickname'], "css/profil.css"); 
callMainTitle($_SESSION['user_nickname']);

callProfil();

} else {

$wrongWay = "Veuillez vous connecter pour accéder à cette page.";
header("Location:connexion.php?wrongway=$wrongWay");

}
//FOOTER
callFooter(); 
     
?>
