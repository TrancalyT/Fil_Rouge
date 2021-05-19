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

if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

callGoldBookConnected($_SESSION['user_name']);

} else {

callGoldBookUnonnected();

}

// FOOTER 
callFooter(); 

?>
      
<!-- SCRIPT -->
<script type="text/javascript" src="js/script.js"></script>