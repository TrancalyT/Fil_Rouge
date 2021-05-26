<?php

require_once(__DIR__.'/VIEW/view_header_bootstrap.php'); 
require_once(__DIR__.'/VIEW/view_footer.php'); 
require_once(__DIR__.'/VIEW/view_connexion.php');

// HEADER
callHeader("Connexion / Inscription", "css/connexion.css");
callMainTitle("Connexion");

if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

    header("Location:profil.php");

} else {

    callConnexion();
}


// FOOTER
callFooter();
    
?>

<!-- SCRIPT -->

<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
