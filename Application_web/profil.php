<?php
require_once(__DIR__.'/VIEW/view_header_bootstrap.php'); 
require_once(__DIR__.'/VIEW/view_footer.php'); 
require_once(__DIR__.'/VIEW/view_profil.php');
require_once(__DIR__.'/SERVICE/GoldbookService.php');



if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

// HEADER
callHeader($_SESSION['user_nickname'], "css/profil.css"); 
callMainTitle($_SESSION['user_nickname']);

// CONTROLLER PROFIL
if ($_SESSION['user_bio'] == NULL){
    $_SESSION['user_bio'] = "Dites nous en plus à votre sujet. Qui êtes vous ? Quels sont vos centres d'intêrets ? Comment avez-vous franchi les portes du Pocket Museum ?";
}
if ($_SESSION['user_vg'] == NULL){
    $_SESSION['user_vg'] = "Plutôt Age of Empire ou Gears of Wars ?";
}
if ($_SESSION['user_music'] == NULL){
    $_SESSION['user_music'] = "Une souris verte, qui courait dans l'herbe, je l'attrape par la queue ...";
}
if ($_SESSION['user_book'] == NULL){
    $_SESSION['user_book'] = "Sois aussi érudit que Père Fourasse, et dis nous quel est ton livre de chevet.";
}
if ($_SESSION['user_sport'] == NULL){
    $_SESSION['user_sport'] = "Le blitzball ou le quidditch sont aussi des sports, si si ...";
}
if ($_SESSION['user_movie'] == NULL){
    $_SESSION['user_movie'] = "Quoi tu n'as pas vu Jurassic Park ? Si c'est le cas, tu devrais nous le dire.";
}


$userGoldbook = new GoldbookService();
$userMessage = $userGoldbook->userMessage($_SESSION['user_id']);

// AFFICHAGE PROFIL
callProfil($userMessage);

} else {

$wrongWay = "Veuillez vous connecter pour accéder à cette page.";
header("Location:connexion.php?wrongway=$wrongWay");

}
//FOOTER
callFooter(); 
     
?>

<!-- SCRIPT -->
<script src="js/bootstrap.bundle.min.js"></script>
