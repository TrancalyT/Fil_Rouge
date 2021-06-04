<?php

require_once(__DIR__.'/VIEW/view_header_bootstrap.php'); 
require_once(__DIR__.'/VIEW/view_footer.php'); 
require_once(__DIR__.'/VIEW/view_contact.php');

// HEADER
callHeader("Contact", "css/contact.css");
callMainTitle("Contact");

// FORMULAIRE CONTACT

callContact();

  if (isset($_POST['envoyer'])) {
    $position_arobase = strpos($_POST['mailcontact'], '@');
    if ($position_arobase === false)
      echo '<p>Votre email doit comporter un arobase.</p>';
    else {
      $return = mail('jesuisun@mail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['mailcontact']);
      if ($return)
        echo '<p>Votre message a été envoyé.</p>';
      else
        echo '<p>Erreur.</p>';
    }
  }

// FOOTER
callFooter(); ?>