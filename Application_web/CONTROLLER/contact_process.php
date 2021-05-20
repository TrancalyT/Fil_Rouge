<?php
if (isset($_POST['envoyer'])) {
    $position_arobase = strpos($_POST['mailcontact'], '@');
    if ($position_arobase === false) {
        echo '<p>Votre email doit comporter un arobase.</p>';
    } else {
        $return = mail('jesuisun@mail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['mailcontact']);
        if ($return) {
            // echo '<p>Votre message a été envoyé.</p>';
            $success = "<strong>Success!</strong> Votre message a bien été envoyé!";
        } else {
            // echo '<p>Erreur.</p>';
            $error = "Il y a une erreur...";
        }
    }
    header('Location: ../contact.php');
}
